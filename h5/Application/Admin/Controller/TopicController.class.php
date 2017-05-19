<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/5/15
 * Time: 下午9:22
 */
namespace Admin\Controller;
use Think\Controller;
class TopicController extends Controller{
    function topic(){
        $this->display();
    }
    function add(){
        json_encode($_POST);
        $model = D('Topic');
        $data['topic_title'] = $_POST['title'];
        $data['topic_desc'] = $_POST['content'];

        $data['user_id'] = 1;   //由于还没有做用户的登录，所以暂时写死
        $data['pub_time'] = time(); //发布时间

        $re = $model->filter('strip_tags')->add($data);
        if($re){
            echo '添加成功';
        }else{
            echo '添加失败';
        }
    }

}