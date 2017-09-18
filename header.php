<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    </head>
    
    <body <?php body_class(); ?>>
              
        <div class="container">
        
            <header class="site-header">
                
                <!--hd-search-->
                <div class="hd-search">
                    <?php get_search_form(); ?>
                </div>
                
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
                <h5><?php bloginfo('description'); ?></h5>
                
                <nav class="site-nav">
                    
                    <?php 
                    
                    $args = array(
                        'theme_location' => 'primary'
                    );
                    
                    ?>
                    
                    <?php wp_nav_menu( $args ); ?>
                    
                </nav>
                
            </header>