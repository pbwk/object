<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/5/15
 * Time: 下午10:48
 */
namespace Admin\Controller;
use Think\Controller;
use Think\Think;
use Think\Verify;
class LoginController extends Controller{
     function register(){
         $this->display();
     }

     //验证注册
     function  doregister(){
         $vf = new \Think\Verify();//实例化验证码对象
         $yzm = I('post.yzm');
         if($vf->check($yzm)){//判断验证码是否相等
             $verifty = new \Think\Auth();
             $res1 = $verifty->check($_POST['user_name']);
             $res2 = $verifty->check($_POST['password']);
             $res3 = $verifty->check($_POST['user_name']);

         }
         else{
             echo '验证码错误，请重新注册！';
         }
     }

    function verify(){
        $config = array(
            'fontSize'  =>  25,              // 验证码字体大小(px)
            'imageH'    =>  40,               // 验证码图片高度
            'imageW'    =>  200,               // 验证码图片宽度
            'length'    =>  4,               // 验证码位数
        );

        $vf = new \Think\Verify($config);//实例化验证码对象
        $vf->entry();//输出验证码
    }

    function  login(){
        $this->display();
    }
    function dologin(){
        $model = D('Login');

        if(IS_POST){
            $user = I('post.user_name');//得到用户名
            $pwd  = I('post.password');//得到密码
            if($model->checkByUserPass($user,$pwd)){//判断用户名和密码比对是否相等
                $vf = new \Think\Verify();//实例化验证码对象
                $yzm = I('post.yzm');
                if($vf->check($yzm)){//判断验证码是否相等
                    echo '验证码正确，登录成功！';
                }
                else{
                    echo '验证码错误，登录失败！';
                }
            }
            else{
                echo '用户名或者密码错误！';
            }
        }

    }
}
