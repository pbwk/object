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

<form id="form1" name="form1" method="post" action="/index.php/Admin/Category/updateCategory/pid/44" >
  <table width="600" border="1" align="center" bordercolor="#000000">
    <tr>
      <th colspan="2">修改目录</th>
    </tr>
    <tr>
      <td>标题：</td>
      <td><input name="pn" type="text" value="<?php echo ($fd["cat_name"]); ?>" /></td>
    </tr>
    <!--<tr>-->
      <!--<td>产品名称：</td>-->
      <!--<td><input name="pn" type="text" value="<<?php echo ($fd["pname"]); ?>>"  /></td>-->
    <!--</tr>-->
    <tr>
      <td>内容：</td>
      <td><input name="pp" type="text" value="<?php echo ($fd["cat_desc"]); ?>"  /></td>
    </tr>
    <tr>
      <td>目录关系：</td>
      <td><input name="pc" type="text" value="<?php echo ($fd["parent_id"]); ?>"  /></td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="submit"  value="提交" id='bt' />
      <input type="reset"  value="重置" /></td>
    </tr>
  </table>
</form>
</body>
</html>