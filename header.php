<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

    <meta name="description" content="">
    <meta name="author" content="">

    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg navbar-dark rounded">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <?php if (function_exists('the_custom_logo')) : ?>
                    <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                    <?php else : ?>
                    <a href="http://localhost/wordpress/" class="navbar-brand" rel="home"><img 
                            src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="custom-logo"
                            alt=""></a>
                    </a>
                    <?php endif; ?>
                    <?php endif; ?>
                </li>
            </ul>
            <div class="text-centet">
            <button class="navbar-toggler" style="color: #3a3a3a;" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>Toggle to open Menu
            </button>
            </div>
            <?php if (has_nav_menu('top')) : ?>
            <?php
                wp_nav_menu([
                    'menu'            => 'primary',
                    'theme_location'  => 'top',
                    'container'       => 'div',
                    'container_id'    => 'navbarCollapse',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => 'navigation-bar',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
                ?>
            <?php else: ?>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul id="navigation-bar" class="navbar-nav ml-auto">
                    <li id="menu-item-45"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-45 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Who We
                            Are</a>
                        <div class="dropdown-menu">
                            <a href="#" class=" dropdown-item">Dropdown</a></div>
                    </li>
                    <li id="menu-item-46"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-46 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">About</a>
                        <div class="dropdown-menu">
                            <a href="#" class=" dropdown-item">Dropdown</a></div>
                    </li>
                    <li id="menu-item-47"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-47 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu">
                            <a href="#" class=" dropdown-item">Dropdown</a></div>
                    </li>
                    <li id="menu-item-48"
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contact</a>
                        <div class="dropdown-menu">
                            <a href="#" class=" dropdown-item">Dropdown</a></div>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
            
            <?php get_search_form(); ?>
           
        </div>
    </nav>

    <div id="banner">
        <div class="container d-flex h-100">
            <div class="row justify-content-center align-self-center">
                <div class="col-md-12">
                    <div class="main">
                        <?php $main_post = get_post( 37 ); ?>
                        <?php if (!is_null($main_post)): ?>
                        <h2 class="headline display-4"><?= $main_post->post_title; ?></h2>
                        <p><?= $main_post->post_content; ?></p>
                        <a href="<?= $main_post->permalink; ?>" class="btn btn-primary read-more">Read More</a>
                        <?php else: ?>
                        <h2 class="headline display-4">Hunter burton consulting</h2>
                        <p>Our consultancy provide innovative strategy and<br> consulting services to small and midsize
                            businesses <br> as well as non-profit and</p>
                        <a href="" class="btn btn-primary read-more">Read More</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>