
</main>
<footer id="footer" class="footer">
    <div class="grid-container">
        <div class="foottop">
            <div class="grid-x grid-margin-x">
                <div class="cell medium-4 large-4 xlarge-3 foot_col1">
                    <div class="foot_logo">
                        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo MBN_ASSETS_URI ?>/img/logo-w.png" alt=""></a>
                        <h3>APT is the leading certification and training company.</h3>
                    </div>
                    <div class="foot_contact">
                        <h4>Contact</h4>
                        <ul>
                            <li><a href="mailto:customerservice@ap.training"><i class="ai-envelope"></i> customerservice@ap.training</a></li>
                            <li><a href="tel:1-480-322-1149"><i class="ai-phone"></i> 1-480-322-1149</a></li>
                            <li><a href="#"><i class="ai-placepin"></i> 3200 N. Dobson Rd, Suite F7 Chandler, AZ 85224</a></li>
                        </ul>
                    </div>
                </div>
                <div class="cell medium-4 large-4 large-offset-1 xlarge-3 xlarge-offset-0 foot_col2">
                    <?php // if ( is_active_sidebar( 'footer-col-2' ) ) : ?>
                        <?php // dynamic_sidebar( 'footer-col-2' ); ?>
                    <?php // endif; ?>
                    <div class="foot_menu">
                        <h4>All Courses</h4>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'foot-courses-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul>%3$s</ul>' 
                            ));
                        ?>
                    </div>
                    <div class="foot_menu">
                        <h4>About Us</h4>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'foot-about-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul>%3$s</ul>' 
                            ));
                        ?>
                    </div>
                </div>
                <div class="cell medium-3 large-3 xlarge-2 foot_col3">
                    <div class="foot_menu">
                        <h4>My Account</h4>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'foot-account-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul>%3$s</ul>' 
                            ));
                        ?>
                    </div>
                </div>
                <div class="cell medium-4 medium-offset-4 large-4 large-offset-5 xlarge-2 xlarge-offset-0 foot_col4">
                    <?php if ( is_active_sidebar( 'footer-col-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-col-4' ); ?>
                    <?php endif; ?>
                    <div class="foot_endpoints">
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'foot-endpoints-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul>%3$s</ul>' 
                            ));
                        ?>
                    </div>  
                </div>
                <div class="cell medium-3 large-3 xlarge-2 foot_col5">
                    <?php if ( is_active_sidebar( 'footer-col-5' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-col-5' ); ?>
                    <?php endif; ?>
                    <div class="foot_location">
                        <h4>Location</h4>
                        <?php
                            wp_nav_menu( array( 
                                'theme_location' => 'foot-locations-menu',
                                'menu'       => '',
                                'container'  => '',
                                'items_wrap' => '<ul>%3$s</ul>' 
                            ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="footbot">
            <div class="grid-x">
                <div class="cell medium-12 large-4 large-order-2">
                    <div class="follow_us">
                        <h5>FOllow Us</h5>
                        <ul>
                            <li>
                                <a href="https://facebook.com" target="_blank"> 
                                    <i class="ai-facebook"></i>
                                    <span class="show-for-sr">facebook</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com" target="_blank">
                                    <i class="ai-twitter"></i>
                                    <span class="show-for-sr">twitter</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com" target="_blank">
                                    <i class="ai-instagram"></i>
                                    <span class="show-for-sr">instagram</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtube.com" target="_blank">
                                    <i class="ai-youtube"></i>
                                    <span class="show-for-sr">youtube</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="cell medium-6 large-4 large-order-1 copyright">Copyright <?php echo date('Y'); ?> &copy; APT. ALL Rights Reserved.</div>
                <div class="cell medium-6 large-4 large-order-3 designby">
                    <a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website Design</a>
                     by: My Biz Niche</div>
            </div>
        </div>

    </div>
</footer>
</div>  

<?php wp_footer() ?>

</body>
</html>