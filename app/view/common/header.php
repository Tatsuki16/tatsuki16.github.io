<?php 
		global $tabl;
        global $config; 
 ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $config['sitename'] ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php echo $config['meta'] ?>">
	<meta name="description" content="">
    <!-- 
	Workforce Template
	http://www.templatemo.com/free-website-templates/461-workforce
    -->
	<link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300&subset=latin,cyrillic,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="app/public/css/animate.min.css">
	<link rel="stylesheet" href="app/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="app/public/css/font-awesome.min.css">	
	<link rel="stylesheet" href="app/public/css/style.css">	
	<link rel="stylesheet" href="app/public/css/reset.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="app/public/css/fonts.css"></script>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
	<div class="preloader">
		<div class="sk-spinner sk-spinner-rotating-plane"></div>
	</div>
	<nav class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><?php echo $config['sitename'] ?></a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="https://vk.com/albania_rp" class="smoothScroll">Группа Вконтакте</a></li>
					<li><a href="/" class="smoothScroll">Главная</a></li>
					<li><a href="<? echo $config['forum'] ?>" class="smoothScroll">Форум</a></li>
					<li><a href="?l=login" class="smoothScroll">Личный Кабинет</a></li>
					<li><a href="?l=donat" class="smoothScroll">Донат</a></li>				
				</ul>							
			</div>						
		</div>
	</nav>