<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/4/18
 * Time: 上午11:10
 */
namespace home\controller;
use framework\core\Controller;
use framework\core\Factory;
use framework\tools\Captcha;
use framework\tools\Verify;
use framework\tools\Email;

class UserController extends Controller{
    public function  registerAction()
    {
        $this->smarty->display('user/register.html');
    }
    //接收表单并保存数据
    public  function  doRegisterAction()
    {
//        echo'<pre>';
//        var_dump($_POST);
//        die;
//      //1验证网站协议
        if(isset($_POST['agreement_chk'])){
            //2验证码是否正确
            session_start();
            if(strtolower($_SESSION['code']) == strtolower($_POST['seccode_verify'])){
                //验证码正确
                //3验证用户信息
                $verify = new Verify();
                //用户名
               $result1 =  $verify->checkUser($_POST['user_name']);
               $result2 = $verify->checkPass($_POST['password']);
               $result3 = $verify->checkEmail($_POST['email']);
               if($result1 &&$result2 &&$result3){
                   //说明验证符号规则
                   //验证用户名是否存在
                   $m_user = Factory::M('User');
                  $result =  $m_user->hasUserEmail($_POST['user_name'],$_POST['email']);
                   if($result){
                       //说明找到了 用户已注册
                       $this ->jump('?m=home&c=user&a=registerAction','用户、邮箱已存在');
                   }else{
                       //没有找到 入库
                       $data['username'] = $_POST['user_name'];
                       $data['password'] = md5($_POST['password']);
                       $data['email'] = $_POST['email'];
                       $data['is_active'] = 0; //未激活
                       $data['reg_time'] = time();
                       $data['activate_code'] = md5(mt_rand(1000,9999).time());

                       $result = $m_user -> insert($data);
                       if($result){
                           //注册成功
                           //发送邮件
                           $title = '注册成功，请激活';

                           $content = <<<HTML
<a href="http://0418.dev/0415/index.php?m=home&c=user&a=activateAction&code={$data['activate_code']}&user={$data['username']}">点击激活</a>
HTML;
                           $res = Email::send($title, $content, $data['email']);
                           if($res === true){
                               //注册成功
                               $this->jump('?m=home&c=user&a=loginAction', '注册成功');
                           }
                       }else{
                           //注册失败
                           $this->jump('?m=home&c=user&a=registerAction', '注册失败，请重试');
                       }
                   }


               }else{
                   //
                   $this ->jump('?m=home&c=user&a=registerAction',$verify->showError());
               }

            }else{
                //验证码错误
                $this ->jump('?m=home&c=user&a=registerAction','验证码错误');
            }
        }else{
            $this ->jump('?m=home&c=user&a=registerAction','请先同意协议');
        }

    }
    public function  makeCaptchaAction()
    {
        $captcha =  new Captcha();
        $captcha -> font_file = FONT_PATH.'/PB.TTF';
        $captcha ->makeImage();

    }
    public function activateAction()
    {
        //接收传递过来的用户名、激活码
        $user = $_GET['user'];
        $code = $_GET['code'];
        //1. 先去数据库查询是否给该用户发送过该激活码
        $m_user = Factory::M('User');
        $result = $m_user -> checkByUserCode($user,$code);
        if($result){
            //2. 查询到了，验证是否已过期
            // 拿注册时间 和 当前时间 比较 》 24小时，已过期
            if(time() - $result['reg_time'] > 24*3600){
                $this->jump('?c=user&a=registerAction', '激活链接已过期');
            }else{
                //3. 没有过期,再验证是否已经激活了
                if($result['is_active']==1){
                    //说明已经激活了
                    $this->jump('?c=user&a=loginAction', '已激活请直接登录');
                }else{
                    //说明没有激活，在这里激活,也就是将is_active更新为1
                    $data['is_active'] = 1;
                    $where = array('user_id'=>$result['user_id']);
                    $res = $m_user -> update($data,$where);
                    if($res){
                        $this->jump('?c=user&a=loginAction', '激活成功请登录');
                    }else{
                        $this->jump('?c=user&a=registerAction', '激活失败');
                    }
                }
            }
        }else{
            //没有查询到，激活失败
            $this->jump('?c=user&a=registerAction', '请重新发送激活邮件');
        }
    }
    //显示登陆页面
    public  function loginAction()
    {
        $this->smarty->display('user/login.html');
    }
    public  function  doLoginAction()
    {
        //1. 先验证用户名、密码是否正确
        $user = $_POST['user_name'];
        $pwd = md5($_POST['password']);
        $m_user = Factory::M('User');
        $result = $m_user -> checkByUserPass($user,$pwd);
        if($result){
            //2. 说明用户名、密码正确,再验证是否已激活
            if($result['is_active']==1){
                //3. 说明已经激活，判断是否记住我
                if(isset($_POST['net_auto_login'])){
                    //说明记住我，记住之后再登录
                    setcookie('uname',$result['username'],time()+7*24*3600);
                }
                //说明没有记住我,直接登录
                session_start();
                $_SESSION['user'] = $result['username'];

                $this->jump('index.php', '登录成功');
            }else{
                //说明未激活
                $this->jump('?c=user&a=loginAction', '请先激活在登录');
            }
        }else{
            //说明用户名、或密码错误
            $this->jump('?c=user&a=loginAction', '用户名或密码错误');
        }

    }
}
