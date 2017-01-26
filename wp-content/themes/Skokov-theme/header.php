<!DOCTYPE html>
<html>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <?php wp_head(); ?>
</head>
<body>

<header class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <a href="<?php home_url(); ?>"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="" class="img-fluid"></a>
        <h1>Skokov</h1>
    </div>

    <?php wp_nav_menu(array('theme_location' => 'nav-bar', 'menu_class'=>'nav-bar d-flex flex-row align-items-center ', 'container'=> 'false')); ?>

<!--    <ul class="nav-bar d-flex flex-row align-items-center">-->
<!--        <li><a href="--><?php //home_url(); ?><!--">Home</a></li>-->
<!--        <li><a href="#">Portfolio</a></li>-->
<!--        <li><a href="#">Blog</a></li>-->
<!--        <li><a href="#">About us</a></li>-->
<!--        <li><a href="#">Contact</a></li>-->
<!--   </ul>--->

    <button id="button-menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

</header>

<?php wp_nav_menu(array('theme_location' => 'nav-bar', 'menu_class'=>'hide-nav-bar', 'container'=> 'false')); ?>
<!--<ul class="hide-nav-bar ">-->
<!--    <li><a href="#">Home</a></li>-->
<!--    <li><a href="#">Portfolio</a></li>-->
<!--    <li><a href="#">Blog</a></li>-->
<!--    <li><a href="#">About us</a></li>-->
<!--    <li><a href="#">Contact</a></li>-->
<!--</ul>-->