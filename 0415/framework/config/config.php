<?php
//框架的配置文件
return array(
    //数据库的配置信息
    'host'              =>  '127.0.0.1',
    'user'              =>  'root',
    'pass'              =>  '123',
    'dbname'            =>  'ask',
    'port'              =>  3306,
    'charset'           =>  'utf8',
    'table_prefix'      =>  'ask_',
    
    //smarty的配置
    'left_delimiter'    =>  '<{',
    'right_delimiter'   =>  '}>',
    
    //默认的模块（前台、后台）
    'default_module'    =>  'home',
    //默认的控制器（IndexController）
    'default_controller'=>  'Index',
    //默认的方法（indexAction）
    'default_action'    =>  'indexAction',



    //设置邮箱的配置
    'email_host'        => 'smtp.163.com',
    'sender'            => 'xiaobudian-066@163.com',
    'nickname'          => 'pbwk',
    'account'           =>  'xiaobudian-066',
    'token'             => 'pbwk2017'
    
);