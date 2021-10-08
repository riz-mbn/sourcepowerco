<?php 
/**
 * Template Name: Home Page template
 */
get_header() ?>

<div class="home_page">
    <section class="hero hero-s3">
        <figure class="bg"><img src="<?php echo MBN_ASSETS_URI ?>/img/bgs/img-hero-banner.jpg" alt="" width="1920" height="1080"></figure>
        <div class="hero-caption">
            <div class="grid-container"> 
                <div class="grid-x">
                    <div class="cell large-6 small-12 align-self-middle">
                        <h1>Solar Power...</h1>
                        <h2>NO PANELS OR HOME NECESSARY.</h2>                        
                        <p>We’re transforming the way residential energy customers and small business owners can access clean, renewable solar energy.</p>
                        <div class="hero-form">
                            <?= do_shortcode('[home_zip_form]'); ?>
                            
                            <figure class="hide-for-large"><img src="<?php echo MBN_ASSETS_URI ?>/img/img-badge-bbb.svg" width="160" height="60" /></figure>
                        </div>
                    </div>
                    <div class="cell small-12 large-5 large-offset-1 align-self-middle">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="home_cta"> 
        <div class="grid-container">
            <div class="grid-x">
                <div class="cell large-6 small-12 align-self-middle show-for-large">
                    <div class="text-wrap">
                        <h1>YOU SAVE MONEY EVERY MONTH. GUARANTEED.</h1>
                        <p>And you don’t need roof panels.  Or even a roof.  We call it <span class="highlight">Community Solar.</span></p>
                    </div>
                    <a href="" class="primary button">SIGN UP NOW</a>
                </div>
                <div class="cell large-6 small-12 align-self-middle show-for-large">
                    <figure class=""><img src="<?php echo MBN_ASSETS_URI ?>/img/img-home.png" width="665" height="428" /></figure>
                </div>
            </div>
        </div>
    
    </section>
</div>

<?php get_footer() ?>