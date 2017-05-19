<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/5/16
 * Time: 上午11:07
 */
namespace Admin\Model;
use Think\Model;
class LoginModel extends  Model{
   function checkByUserPass($user,$pwd)
   {
        $data = $this -> where("username='$user' and password='$pwd'")->find();
        if($data){
            return $data;
        }
        else{
            return null;
        }
   }


}