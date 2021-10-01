<?php
/**
 * Template Name: Lander - PPC 1
**/
?>
<!doctype html>
<html> 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php 
        remove_action( 'wp_head', 'wp_enqueue_scripts', 1); 
        //remove_action( 'wp_head', 'style_scripts');

        function hook_css_js () {

            define('MBN_DIR_URI', get_template_directory_uri());
            define('LANDER_ASSETS_URI', MBN_DIR_URI.'/lander/assets');
            $version = "6.5.7"; 
    ?>

    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?= LANDER_ASSETS_URI; ?>/css/app.css?ver=<?= $version; ?>" />
    <link rel="stylesheet" type="text/css" href="<?= LANDER_ASSETS_URI; ?>/css/qa.css?ver=<?= $version; ?>" />
	
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- JS -->
    <script src="<?= LANDER_ASSETS_URI; ?>/vendor/jquery-3.4.1.min.js?ver=<?= $version; ?>"></script>
    <script src="<?= LANDER_ASSETS_URI; ?>/vendor/foundation/js/foundation.min.js?ver=<?= $version; ?>"></script>

    <script src="<?= LANDER_ASSETS_URI; ?>/vendor/fancybox/jquery.fancybox.min.js?ver=<?= $version; ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?= LANDER_ASSETS_URI; ?>/vendor/fancybox/jquery.fancybox.min.css?ver=<?= $version; ?>" />

    <?php 
        } add_action('wp_head', 'hook_css_js'); 

        wp_head();
    ?>
    <script async="" type="text/javascript">var d=document,s="https://a.smtrk.net/trk?t=s&i=6087255d2ea69b1e288faa0c&p=t,i,x&s=479302880387c74bc42b9596ef22eadd&r="+escape(d.referrer)+"&u="+escape(d.URL),n=d.reateElement("script"),e=d.getElementsByTagName("script")[0];n.async=!0,n.src=s,e.parentNode.insertBefore(n,e);</script>


</head>
<body>
<header id="header">
    <div class="grid-container">
        <div class="grid-x">
            <div class="cell xlarge-offset-1">
                <a class="logo" href="/"><img src="<?= LANDER_ASSETS_URI; ?>/img/logo-w.png" alt="" class="skip-lazy"></a>
            </div>
        </div>
    </div>        
</header>
<main id="content">
    <section class="sec_hero">
        <figure class="bg"><img src="<?= LANDER_ASSETS_URI; ?>/img/bg-banner.jpg" alt="" class="skip-lazy"></figure>
        <div class="grid-container">
            <div class="caption">
                <h1>Go Solar. Without solar panels. </h1>
                <p>Access the benefits and savings of solar today.</p>
                <p>You save money every month.  Guaranteed.<br>And you don’t need roof panels.  Or even a roof.  We call it Community Solar.</p>
                <p>Plus, for a limited time get one month free!</p>
                <!-- <a href="#" class="button">learn more</a> -->
                <div class="getsolar_form">
                    <h2>Get The Benefits of Solar Now</h2>
                    <h5>SIGN UP NOW FOR FREE.<br>
                    SAVE MONEY EVERY MONTH.<br>
                    GUARANTEED IN WRITING.</h5>
                    <?= do_shortcode('[zip_form_lander]'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_getsolar">
        <div class="grid-container">
            <div class="grid-x">
                <?php /*
                <div class="cell large-7 xlarge-6 xlarge-offset-1">
                    <div class="getsolar_form">
                        <h2>Get The Benefits of Solar Now</h2>
                        <h5>SIGN UP NOW FOR FREE.<br>
                        SAVE MONEY EVERY MONTH.<br>
                        GUARANTEED IN WRITING.</h5>
                        
                        <p class="enter_zip">
                            Please enter your zipcode below and click Find Service. The box below will populate with available providers in your area.
                        </p>
                        <form action="">
                            <div class="input-group">
                                <input class="input-group-field" type="text" placeholder="Enter Zip Code">
                                <div class="input-group-button">
                                    <input type="submit" class="button secondary" value="Find Service">
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="input-group-field" type="text" placeholder="- Choose Service Provide -">
                                <div class="input-group-button">
                                    <input type="submit" class="button primary" value="Sign Up">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>   
                        */ ?>
                <div class="cell large-12">
                    <ul class="soloar_features">
                        <li>
                            <div class="icon_top">
                                <i class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/lower-costs.png" alt="" class="skip-lazy"></i>
                                <span>Solar Energy Credits Every Month (Guaranteed savings for you)</span> 
                            </div>
                        </li>
                        <li>
                            <div class="icon_top">
                                <i class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/no-installation.png" alt="" class="skip-lazy"></i>
                                <span>No Installation  Required (And no solar panels on your roof)</span>  
                            </div>
                        </li>
                        <li>
                            <div class="icon_top">
                                <i class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/free-and-easy.png" alt="" class="skip-lazy"></i>
                                <span>Free and Easy Sign Up (No credit check necessary)</span> 
                            </div>
                        </li>
                        <li>
                            <div class="icon_top">
                                <i class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/support-local.png" alt="" class="skip-lazy"></i>
                                <span>Support The Local  Economy (Our renewable energy supports local jobs)</span> 
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_what">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-6 xlarge-6 xlarge-offset-1">
                    <div class="copy">
                        <h2>What is community solar? </h2>
                        <p>“Community Solar” is a solar energy sharing program. Specifically, it’s a field of solar panels that have been installed to allow area residents access to the clean, renewable energy that these panels generate.</p>
                        <p>Renewable solar energy from our solar farm(s) is sent directly to the local power grid. And subscribers receive solar credits to lower their electricity costs.</p>
                        <p>Our system automates everything, and you’ll enjoy renewable solar credits on your utility bill every single month.</p>
                        
                        <ul class="badge_list">
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/new-york-approved.png" alt="" class="skip-lazy"></li>
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/guaranteed-savings2.png" alt="" class="skip-lazy" width="95"></li>
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/bbb-rating.png" alt="" width="140" class="skip-lazy"></li>
                        </ul>
                    </div>
                </div>
                <div class="cell large-6 xlarge-4">
                    <div class="media">
                        <figure>
                            <a href="https://youtu.be/vmV_3trbsQo" data-fancybox class="video_play"><img src="<?= LANDER_ASSETS_URI; ?>/img/img-video.jpg" alt="" class="skip-lazy"></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_how">
        <div class="grid-container">
            <h2 class="float">How it Works</h2>
            <div class="timeline">
                <div class="item" data-item="1">
                    <div class="icon_left">
                        <div class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/signup-free.png" alt="" class="skip-lazy"></div>
                        <h3>Sign up for free today</h3>
                        <p>No credit card required, no long term contract.</p>
                    </div>
                </div>
                <div class="item" data-item="2">
                    <div class="icon_left">
                        <div class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/get-accesss.png" alt="" class="skip-lazy"></div>
                        <h3>Get access to solar - without the ugly panels</h3>
                        <p>Power your home with solar panels near your community.</p>
                    </div>
                </div>
                <div class="item" data-item="3">
                    <div class="icon_left">
                        <div class="icon"><img src="<?= LANDER_ASSETS_URI; ?>/img/see-savings.png" alt="" class="skip-lazy"></div>
                        <h3>See the savings on your next bill.</h3>
                        <p>You’ll enjoy renewable solar credits on your utility bill every single month.</p>
                    </div>
                </div>
            </div>
            <div class="timeclear"></div>
        </div>
        <div class="join_solar">
            <div class="grid-container">
                <div class="grid-x">
                    <div class="cell large-6 text-center align-self-middle">
                        <h2>Join the other 15,000 New Yorkers who are enjoying savings from Community Solar.</h2>
                        <div><a href="#signup-free" data-smooth-scroll class="button" style="margin-bottom:0">try it for free</a></div>
                    </div>   
                    <div class="cell large-6 align-self-bottom">
                        <figure class="overlap"><img src="<?= LANDER_ASSETS_URI; ?>/img/utility-bill.png" alt="" class="skip-lazy"></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_catch">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-5 large-offset-1  xlarge-3 xlarge-offset-1 align-self-middle">
                    <div class="copy">
                        <h2>What’s the catch?</h2>
                        <p>There is a catch. <strong>Just one.</strong> And you’ll like it.</p>
                        <p>You have to <strong>sign up for a one-year contract.</strong></p>
                        <p>But you can <strong>cancel that contract whenever you want.</strong> With no penalty. No cost. <strong>No nothing.</strong> Not bad for a catch, huh?</p>
                    </div>   
                </div>
                <div class="cell large-6 xlarge-7 xlarge-offset-1">
                    <figure class="media"><img src="<?= LANDER_ASSETS_URI; ?>/img/what-the-catch.png" alt="" class="skip-lazy"></figure>
                </div>
            </div>
        </div>
    </section>

    <section class="sec_start" id="signup-free">
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell large-5 large-offset-1 align-self-center">
                    <div class="copy">
                        <h2>Start saving with Source Power Community Solar!</h2><br>
                        <ul class="badge_list">
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/new-york-approved-w.png" alt="" class="skip-lazy"></li>
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/guaranteed-savings2-w.png" alt="" class="skip-lazy" width="110"></li>
                            <li><img src="<?= LANDER_ASSETS_URI; ?>/img/bbb-rating.png" alt="" class="skip-lazy"></li>
                        </ul>
                    </div>
                </div>
                <div class="cell large-6 xlarge-5">
                    <div class="getsolar_form">
                        <h3>Get The Benefits of Solar Now</h3>
                        <h5>SIGN UP NOW FOR FREE.<br>
                        SAVE MONEY EVERY MONTH.<br>
                        GUARANTEED IN WRITING.</h5>
                        <?php /*
                        <p class="enter_zip">
                            Please enter your zipcode below and click Find Service. The box below will populate with available providers in your area.
                        </p>
                        <form action="">
                            <div class="input-group">
                                <input class="input-group-field" type="text" placeholder="Enter Zip Code">
                                <div class="input-group-button">
                                    <input type="submit" class="button secondary" value="Find Service">
                                </div>
                            </div>
                            <div class="input-group">
                                <input class="input-group-field" type="text" placeholder="- Choose Service Provide -">
                                <div class="input-group-button">
                                    <input type="submit" class="button primary" value="Sign Up">
                                </div>
                            </div>
                        </form>
                        */ ?>
                        <?= do_shortcode('[zip_form_lander2]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</main>
<footer id="footer" class="footer">
    <div class="grid-container"> 
        <div class="grid-x">
            <div class="cell large-4 large-offset-1">
                <figure class="flogo">
                    <img src="<?= LANDER_ASSETS_URI; ?>/img/logo.png" alt="" class="skip-lazy" >
                </figure>
            </div>
            <div class="cell large-7 text-center">
                <h3>Call us:  <a href="tel:1 833 227 2660">1 - 833 - 227 - 2660</a></h3>
                <div class="copyright">
                    &copy; Source Power Company  |   All Rights Reserved.   |   
                    <a href="/terms-of-service">Terms of Service</a> | 
                    <a href="/privacy-policy">Privacy Policy</a>  |  
                    <span class="designby"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a> by: My Biz Niche</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>$(document).foundation();</script>
<?PHP 
	//remove_action( 'wp_footer', 'js_scripts');
	wp_footer();
?>
</body>
</html>

