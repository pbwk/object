<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript" src='/Public/Admin/javascript/jquery-3.1.1.min.js'></script>
<script type="text/javascript">
  $(function(){
      $('#bt').click(function(){
//          var pt = $('input[name=pt]').val();
          var pn = $('input[name=pn]').val();
          var pp = $('input[name=pp]').val();
          var pc = $('input[name=pc]').val(); 
          $.ajax({
            url:'add',
            data:{pn:pn,pp:pp,pc:pc},
            dataType:'html',
            type:'post',
            success:function(res){
                alert(res);//输出返回值
            }
          })        
      })
  })
</script>
<style type="text/css">
	body{
		font-size:12px;
	}
</style>

</head>

<body>

<form id="form1" name="form1" method="post" action="#" >
  <table width="600" border="1" align="center" bordercolor="#000000">
    <tr>
      <th colspan="2">添加分类</th>
    </tr>
    <!--<tr>-->
      <!--<td>产品类型：</td>-->
      <!--<td><input name="pt" type="text" value="" /></td>-->
    <!--</tr>-->
    <tr>
      <td>标题：</td>
      <td><input name="pn" type="text" value=""  /></td>
    </tr>
    <tr>
      <td>内容：</td>
      <td><input name="pp" type="text" style="width:400px;height:300px; value=""  /></td>
    </tr>
    <tr>
      <td>标题分类：</td>
      <td><input name="pc" type="text" value=""  /></td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="button"  value="提交" id='bt' />
      <input type="reset"  value="重置" /></td>
    </tr>
  </table>
</form>
  <p><a href="<?php echo U('index');?>">首页</a> </p>
</body>
</html>