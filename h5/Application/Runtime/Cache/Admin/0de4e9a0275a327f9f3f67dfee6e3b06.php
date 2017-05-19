<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="description" content="[HERE PASTE YOUR DESCRIPTION]" />
	<meta name="author" content="Template:TemplatesDock " />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/Public/Admin/css/main.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/Public/Admin/css/skin.css" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/Public/Admin/css/botton.css" />

	<script type="text/javascript" src="/Public/Admin/javascript/cufon-yui.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/javascript/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/javascript/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/Public/Admin/javascript/lang/zh-cn/zh-cn.js"></script>
	<script type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6', {hover:true});</script>	
	<script type="text/javascript" src="/Public/Admin/javascript/common.js"></script>
	<title>PHP BlogSystem</title>
</head>

<body>

<div class="main">

	<!-- HEADER -->
	<div id="header" class="box">

		<h1 id="logo">PHP<span> BlogSystem</span></h1>

		<!-- NAVIGATION -->
		<ul id="nav">
			<li ><a href="#">首页</a></li>
			<li ><a href="#">我的博客</a></li>
			<li ><a href="#">Black</a></li>
		</ul>
		
	</div> 

	<div id="section" class="box">
				<h2>发博文</h2>

				<div style="border-bottom: 1px dotted #CCC;"></div>
				
				
				<form>
					<ul>
						<li>
							<input type="text" size="45" class="input-text" placeholder="请输入博文title" name="title">
						</li>
						<input  type="text" name="content" style="width:400px;height:300px;">

						<li><input type="button" value=" 提交 " id="btn"  /></li>
					
					</ul>
				</form>
					
	</div> 

</div> 
	
<!-- FOOTER -->
<div id="footer">

	<div class="main box">
		<p class="f-right t-right"> 联系我们 | 招聘信息 | 网站律师  使用须知</p>
		<p class="f-left">Copyright &copy;&nbsp;2015 <a href="http://www.itbull.cn/">泰牛学院</a></p>
	</div> 

</div> <!-- /footer -->



</body>
</html>
<script type="text/javascript">

	 var oForm = document.getElementsByTagName('form')[0];
	 var oBtn = $('btn');
	 oBtn.onclick = function () {
	     var title =  document.getElementsByName('title')[0].value;
	     var content = document.getElementsByName('content')[0].value;
	     var xhr;

		 xhr = new XMLHttpRequest();

		 xhr.open('POST','/index.php/?s=admin/topic/add',true);

		 var data =  new FormData(oForm);
		 xhr.send(data);

		 xhr.onreadystatechange = function () {
			 if(xhr.readyState == 4 && xhr.status==200){
					alert(xhr.responseText);

			 }
         }

	 }
</script>