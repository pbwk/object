<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 17/5/18
 * Time: 下午7:55
 */
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller{
        function  addCategory(){
            $this->display();
        }
        //添加分类
        function add(){
            $model = D('Category');
            $model->cat_name = I('post.pn');
            $model->cat_desc = I('post.pp');
            $model->parent_id = I('post.pc');

            $re = $model->add($data);
            if($re){
                $this->ajaxReturn('添加数据成功','eval');
            }else{
                $this->ajaxReturn('添加数据失败','eval');
            }
        }

        //查看数据
        function index(){
            $model = D('Category');
            $res = $model->select();
            $this->assign('res',$res);
            $this->display('Home@index:index');
        }

        //修改数据
        function updateCategory(){
            $model = D('Category');
            $pid = I('get.pid');
            if(IS_GET){
                $fd = $model->find($pid);
                $this->assign('fd',$fd);
            }
            if(IS_POST){
//                $data['cat_id'] = $pid;
                $model->find($pid);
                $model->cat_name = I('post.pn');
                $model->cat_desc = I('post.pp');
                $model->parent_id = I('post.pc');
                $re = $model ->save($data);
                if($re){
                    $this->success('数据库修改成功',U('index'));
                }else{
                    $this->error('数据库失败');
                }
            }
            $this->display();
        }

        //删除数据
        function deleteCategory(){
            $model = D('Category');
            $pid = I('get.pid');
            $res = $model->delete($pid);
            if($res){
                $this->success('数据删除成功',U('index'));
            }
            else{
                $this->error('数据库删除失败');
            }
        }
}