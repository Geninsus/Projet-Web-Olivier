
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?= $title_for_layout; ?></title>
<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more."/>
<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com"/>
<meta name="copyright" content="ZURB, inc. Copyright (c) 2014"/>
<?= $this->Html->css('normalize'); ?>
<?= $this->Html->css('foundation'); ?>
<?= $this->Html->script('../assets/js/modernizr'); ?>
<?= $this->fetch('css'); ?>
</head>
<body>
 
<nav class="top-bar" data-topbar>
<ul class="title-area">
 
<li class="name">
<h1>
<a href="#">
Mon premier blog avec cakePHP
</a>
</h1>
</li>
<li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
</ul>

</nav>
<div class="row">
	<p>&nbsp;</p>
<?= $this->fetch('content'); ?>
</div>
 <?= $this->fetch('script'); ?>

</body>
</html>