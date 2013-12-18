<!doctype html>
<html lang="<?php bloginfo('language')?>">
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' );?> Portfolio d'Anne-Sophie Pirlet</title>
	<link href='http://fonts.googleapis.com/css?family=Trocchi' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>">

</head>
<body>
<nav>
	<h2>Navigation</h2>
	<?php echo strip_tags(wp_nav_menu( array( 'theme_location' => 'header-menu','items_wrap' => '%3$s','container'=>false,'depth'=>0,'echo'=>false ) ),'<a>'); ?>
</nav>
 	