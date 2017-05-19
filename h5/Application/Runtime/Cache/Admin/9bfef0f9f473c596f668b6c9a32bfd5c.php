<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
	body{
		font-size:12px;
	}
</style>

</head>

<body>
  <table width='1000' align="center" border="1" bordercolor='blue' style='border-collapse: collapse;'>
  <tr>
    <th>标题</th>
    <th>内容</th>
    <th>分类目录</th>
    <th>修改</th>
    <th>删除</th>
    <th>添加</th>
  </tr>
  <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
      <!--<td><?php echo ($val["cat_id"]); ?></td>-->
      <td><?php echo ($val["cat_name"]); ?></td>
      <td><?php echo ($val["cat_desc"]); ?></td>
      <td><?php echo ($val["parent_id"]); ?></td>
      <td><a href='/index.php/Admin/Category/updateCategory/pid/<?php echo ($val["cat_id"]); ?>'>修改</a></td>
      <td><a href='/index.php/Admin/Category/deleteCategory/pid/<?php echo ($val["cat_id"]); ?>'>删除</a></td>
      <td><a href='/index.php/Admin/Category/addCategory'>添加</a></td>


    </tr><?php endforeach; endif; else: echo "" ;endif; ?>

  </table>
  
</body>
</html>