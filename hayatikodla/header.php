<!DOCTYPE HTML>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">

	<!--SEO-->
	<title><?php echo wp_title();?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <?php echo wp_head();?>
    
</head>
<body <?php echo body_class();?>>

    <!-- HEADER -->
	<header class="ust-kisim">
		<div class="container">
			<div class="row">
				<div class="logo">
					<a href="/" title="<?php echo bloginfo('blogname');?>">
						<img src="https://www.hayatikodla.com/wp-content/uploads/2018/07/hayati-kodla-1.gif" alt="HAYATI KODLA" />
					</a>
				</div>
				
				<div class="mobil-menu">
					<button type="button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="ust-menu">
					<nav>
						<?php wp_nav_menu( ['theme_location' => 'ustmenu', 'container' => false]); ?>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- HEADER -->