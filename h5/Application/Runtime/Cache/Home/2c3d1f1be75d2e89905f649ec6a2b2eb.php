<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>meet you</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="/Public//Home/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/Public//Home/assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="/Public//Home/assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="/Public//Home/assets/css/ie8.css" /><![endif]-->
</head>
<body>
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="inner">

            <!-- Logo -->
            <a href="index.html" class="logo">
                <span class="symbol"><img src="/Public/Home/images/logo.svg" alt="" /></span><span class="title">Phantom</span>
            </a>

            <!-- Nav -->
            <nav>
                <ul>
                    <li><a href="#menu">Menu</a></li>
                </ul>
            </nav>

        </div>
    </header>

    <!-- Menu -->
    <nav id="menu">
        <h2>Menu</h2>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/index.php/?s=home/index/generic">Ipsum veroeros</a></li>
            <li><a href="/index.php/?s=home/index/generic">Tempus etiam</a></li>
            <li><a href="/index.php/?s=home/index/generic">Consequat dolor</a></li>
            <li><a href="/index.php/?s=home/index/elements">Elements</a></li>
            <li><a href="/index.php/?s=admin/login/login">Login</a></li>
        </ul>
    </nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>Meet a better world, find more surprises<br />
									Find more resources, meet more surprises
								</h1>
								<p>遇见更好的世界，发现更多的惊喜<br>旅行是展开的是未知之境，但我们总是在未知中遇见自己的过往 ，是旅行更是修行
									.</p>
							</header>
							<section class="tiles">

								<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><article class="style1">
									<span class="image">
										<img src="/Public/Home/images/pic01.jpg" alt="" />
									</span>
									<a href="/index.php/?s=home/index/generic/id/1">
										<h2><?php echo ($val["cat_name"]); ?></h2>
										<div class="content">
											<p><?php echo ($val["cat_desc"]); ?>.</p>
										</div>
									</a>
								</article><?php endforeach; endif; else: echo "" ;endif; ?>
							</section>
						</div>
					</div>

<!-- Footer -->
<footer id="footer">
    <div class="inner">
        <section>
            <h2>Get in touch</h2>
            <form method="post" action="#">
                <div class="field half first">
                    <input type="text" name="name" id="name" placeholder="Name" />
                </div>
                <div class="field half">
                    <input type="email" name="email" id="email" placeholder="Email" />
                </div>
                <div class="field">
                    <textarea name="message" id="message" placeholder="Message"></textarea>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Send" class="special" /></li>
                </ul>
            </form>
        </section>
        <section>
            <h2>Follow</h2>
            <ul class="icons">
                <li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
                <li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
                <li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
                <li><a href="#" class="icon style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
                <li><a href="#" class="icon style2 fa-github"><span class="label">GitHub</span></a></li>
                <li><a href="#" class="icon style2 fa-500px"><span class="label">500px</span></a></li>
                <li><a href="#" class="icon style2 fa-phone"><span class="label">Phone</span></a></li>
                <li><a href="#" class="icon style2 fa-envelope-o"><span class="label">Email</span></a></li>
            </ul>
        </section>
        <ul class="copyright">
            <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
        </ul>
    </div>
</footer>

</div>

<!-- Scripts -->
<script src="/Public/Home/assets/js/jquery.min.js"></script>
<script src="/Public/Home/assets/js/skel.min.js"></script>
<script src="/Public/Home/assets/js/util.js"></script>
<!--[if lte IE 8]><script src="/Public/Home/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/Public/Home/assets/js/main.js"></script>

</body>
</html>