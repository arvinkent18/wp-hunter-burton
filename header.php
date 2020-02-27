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
                            <a href="http://localhost/wordpress/" class="navbar-brand" rel="home"><img width="108" height="108" src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="custom-logo" alt=""></a>
                            </a>
                        <?php endif; ?>
                    <?php endif; ?>
                </li>
            </ul>

            <?php if (has_nav_menu('top')) : ?>
                <?php
                wp_nav_menu([
                    'menu'            => 'primary',
                    'theme_location'  => 'top',
                    'container'       => 'div',
                    'container_id'    => 'navbarCollapse',
                    'container_class' => 'collapse navbar-collapse',
                    'menu_id'         => false,
                    'menu_class'      => 'navbar-nav ml-auto',
                    'depth'           => 2,
                    'fallback_cb'     => 'bs4navwalker::fallback',
                    'walker'          => new bs4navwalker()
                ]);
                ?>
            <?php endif; ?>
            <?php get_search_form(); ?>
        </div>
    </nav>