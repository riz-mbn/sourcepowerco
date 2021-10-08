<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.png"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<div id="wrapper"> 

<header id="header" data-sticky-container data-toggler=".show-menu">
    <div class="hsnav-s2 sticky" data-sticky data-options="marginTop:0">
        <!-- <div class="topbar">
           
                <ul class="top-menu menu align-right show-for-large">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
        </div> -->
        <div class="navbar">
            <a class="navlogo" href="<?php echo home_url(); ?>">
                <figure class="logo">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="373" height="80">
                </figure>
                
                <figure class="logo-mob">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo-mob.svg" alt="" width="373" height="80">
                </figure>
            </a>
            <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>
            
            <nav class="navmenu show-for-large">                
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'main-menu',
                        'menu'         => '',
                        'container'    => 'ul',
                        'items_wrap' => '<ul class="menu align-right dropdown" data-dropdown-menu>%3$s</ul>' ,
                        'menu_class'   => 'menu align-right dropdown',
                    ));
                ?> 
            </nav>

            <nav class="mobmenu hide-for-large">
                <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'mobile-menu',
                        'menu'         => '',
                        'container'    => 'ul',
                        'items_wrap' => '<ul class="menu accordion-menu" data-multi-open="false" data-accordion-menu data-submenu-toggle="true">%3$s</ul>' ,
                        'menu_class'   => 'menu accordion-menu',
                    ));
                ?> 
                <div class="contact_info">                        
                    <a class="mphone" href="tel:18332272660">                                
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-phone.svg" alt="" width="13" height="13"/>
                        </figure>
                        <span>1.833.227.2660</span>
                    </a>
                    <a class="tphone" href="tel:18332272660">                                
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fax.svg" alt="" width="12" height="12"/>
                        </figure>
                        <span>1.833.227.2660</span>
                    </a>
                    <a class="email" href="mailto:customerservice@sourcepowerco.com">                               
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-email.svg" alt="" width="16" height="16"/>
                        </figure>
                        <span>customerservice@sourcepowerco.com</span>
                    </a>
                </div>
                
                <p>Follow Us</p>
                <div class="social_icons">
                    <a href="<?php echo esc_url('https://www.facebook.com/'); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-fb.svg" alt="" width="9" height="17"/>
                        </figure>
                    </a>
                    <a href="<?php echo esc_url('https://www.instagram.com//'); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ig.svg" alt="" width="17" height="17"/>
                        </figure>
                    </a>
                    <a href="<?php echo esc_url('https://www.twitter.com//'); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-tw.svg" alt="" width="18" height="12"/>
                        </figure>
                    </a>
                    <a href="<?php echo esc_url('https://www.yoututbe.com//'); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-yt.svg" alt="" width="17" height="17"/>
                        </figure>
                    </a>
                    <a href="<?php echo esc_url('https://www.linkedin.com//'); ?>">
                        <figure>
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/icon/icn-ln.svg" alt="">
                        </figure>
                    </a>
                </div>
            </nav>
            
        </div>
    </div>            
</header>

    <main id="content" class="content">