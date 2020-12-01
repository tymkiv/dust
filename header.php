<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<title> <?php wp_title(); ?> </title>

	<?php wp_head(); ?>
</head>

<body class="<?php if(isTablet()) echo 'tablet'; ?>" data-page-id="<?php echo get_the_ID();?>">
<header>

</header>
<div class="main-wrap">
<main>