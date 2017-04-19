<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/4/18
 * Time: 下午8:37
 */

namespace home\model;


use framework\core\Model;




class UserModel extends Model
{
    protected $logic_table='user';

    public  function  hasUserEmail($username,$email)
    {
        $sql = "SELECT 1 FROM $this->true_table WHERE username='$username' OR email='$email'";
        return $this->dao->fetchColumn($sql);

    }
    //根据用户名 激活码查询
    public  function  checkByUserCode($user,$code)
    {
        $sql = "select * from $this->true_table WHERE username = '$user' AND activate_code ='$code'";
        return  $this->dao->fetchRow($sql);

    }
    //根据用户名 密码查询用户信息
    public  function  checkByUserPass($user,$pwd)
    {
        $sql = "select * from $this->true_table WHERE username = '$user' AND password ='$pwd'";
        return  $this->dao->fetchRow($sql);


    }

}