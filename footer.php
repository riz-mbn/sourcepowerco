

    </main>
    <footer id="footer" class="footer">
        <div class="grid-container">
            <div class="footer_top">
                <div class="grid-x ">
                    <div class="cell medium-12 large-3 col-item footer_col">    
                        <a class="footer_logo" href="<?php echo get_home_url(); ?>">
                            <figure>
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.svg" alt="" width="373" height="80">
                            </figure>
                        </a>
                    </div>
                    <div class="cell small-6 medium-6 large-2 large-offset-1 col-item footer_col"> 
                        <div class="footer_menu">                
                            <ul class="menu">
                                <li class="menu-item"><a href="<?php echo home_url() ?>">Home</a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/about">About Us</a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/faqs">FAQs</a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/contact">Contact</a></li>
                                <li class="menu-item hide-for-large"><a href="<?php echo home_url() ?>/terms-of-service">Terms of Service</a></li>
                                <li class="menu-item hide-for-large"><a href="<?php echo home_url() ?>/privacy-polic">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cell small-6 medium-6 large-3 col-item footer_col">  
                        <div class="footer_menu">                
                            <ul class="menu">
                                <li class="menu-item"><a href="<?php echo home_url() ?>/what-is-community-solar/">What is Community Solar? </a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/how-it-works">How it works ?</a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/whats-the-catch">What’s the catch?</a></li>
                                <li class="menu-item"><a href="<?php echo home_url() ?>/ready-to-save">Ready to save?</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cell medium-12 large-3 col-item footer_col">    
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
                    </div>
                </div>       
            </div>
            <div class="footbot">
                <div class="footer_copyright">
                    <p>&copy; <?php echo date('Y'); ?> Source Power Company</p>
                    <span class="separator"> | </span>
                    <p><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website</a> by: My Biz Niche</p>
                </div>
                <div class="footer_links">
                    <a href="<?php echo home_url('/terms-of-service');?>">Terms of Service</a><span class="separator"> | </span>
                    <a href="<?php echo home_url('/privacy-policy');?>">Privacy Policy</a></div>
                </div>
            </div>
        </div>
    </footer>
</div>  

<?php wp_footer() ?>

</body>
</html>