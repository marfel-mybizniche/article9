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

<div class="preloader"></div>

<div id="wrapper"> 
<header id="header" class="header" data-sticky-container data-toggler=".show-menu">
    <div class="hsnav-s9 sticky" data-sticky data-options="marginTop:0">
        <div class="navbar grid-container clearfix">
            
            <div class="navutil"> 
                <a class="btn-phone" href="tel:480-322-1149"><i class="ai-phone"></i> 480-322-1149</a>  
                <a class="btn-shop" href="#">
                    <i class="ai-cart"></i> shop <span class="badge">0</span>
                </a>   
                <a class="btn-user show-for-large" href="#">
                    <i class="ai-person"></i> account
                </a>                         
            </div>

            <div class="navleft">
                <span class="navicon hide-for-large" data-toggle="header">mobile menu</span>  
                <a class="navlogo" href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo MBN_ASSETS_URI ?>/img/logo.png" alt="">
                </a>
            </div>
            
            <div class="navright">    
                
                <div class="mobutil">    
                    <a class="btn-user arrow hide-for-large" href="#">
                        <i class="ai-person"></i> My Account
                    </a>  
                </div>  
            </div>

            <div class="my-account">
                <div class="logreg-tabs">
                    <ul class="tabs-menu" data-tabs="" id="tabs-menu">
                            <li class="tabs-title is-active"><a href="#tablog" id="tablog-label" tabindex="0">Login</a></li>
                            <li class="tabs-title"><a href="#tabreg" id="tabreg-label" tabindex="-1">Register</a></li>
                    </ul>
                    <div data-tabs-content="tabs-menu" class="tabs-body">
                        <div class="tabs-panel is-active" id="tablog">
                            <h3>Welcome back!</h3>
                            <form method="post">
                                <div class="field">
                                    <label for="username" class="hide">Username</label>
                                    <input type="text" placeholder="Username"> 
                                </div>
                                <div class="field">
                                    <label for="password" class="hide">Password</label>
                                    <input type="password" placeholder="Password">
                                </div>
                                <div class="remember">
                                    <label>
                                        <input name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                                    </label>	
                                </div>
                                <div class="action">					
                                    <button type="submit" class="button expanded">Login</button>
                                </div>
                                <div class="forgot">
                                    Forgot your <a href="#">username</a> or <a href="#">password?</a>
                                </div>
                            </form>
                        </div>
        
                        <div class="tabs-panel" id="tabreg" role="tabpanel" aria-labelledby="tabreg-label" aria-hidden="true">
                            <h3>New to APT? <small>Are You An Agency? <a href="#">Click Here</a></small></h3>            
                            <form method="post" class="woocommerce-form woocommerce-form-register register">
            
                                <div class="field">
                                    <label for="" class="hide">First name <span class="required">*</span></label>
                                    <input type="text" value="" placeholder="First Name">
                                </div>
                            
                                <div class="field">
                                    <label for="" class="hide">Last name <span class="required">*</span></label>
                                    <input type="text" value="" placeholder="Last Name">
                                </div>

                                <div class="field">
                                    <label for="reg_password" class="hide">Password&nbsp;<span class="required">*</span></label>
                                    <input type="password" name="password" id="reg_password" autocomplete="new-password" placeholder="Password">
                                </div>
        
                                <div class="field">
                                    <label for="reg_password2" class="hide">Confirm Possword <span class="required">*</span></label>
                                    <input type="password" name="password2" id="reg_password2" value="" placeholder="Confirm Possword">
                                </div>
                                
                                <div class="field">
                                    <label for="reg_email" class="hide">Email address&nbsp;<span class="required">*</span></label>
                                    <input type="email" name="email" id="reg_email" autocomplete="email" value="" placeholder="Email address">
                                </div>

                                <div class="field">
                                    <label for="" class="hide">Phone <span class="required">*</span></label>
                                    <input type="tel" value="" placeholder="Phone">
                                </div>
            
                                <div class="remember">
                                    <label>
                                        <input name="rememberme" type="checkbox" value="forever"> <span>Remember me</span>
                                    </label>	
                                </div>
                                <div class="action">
                                    <button type="submit" class="button expanded" name="register">Register</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="logged out"> 
                <!-- <div class="logged in">  -->
                    <h4>All Courses</h4>
                    <ul>
                        <li><a href="#"><i class="ai-gradcap"></i> My Courses</a></li>
                        <li><a href="#"><i class="ai-quizes"></i> My Quiz/Exams</a></li>
                        <li><a href="#"><i class="ai-classroom"></i> My Order History</a></li>
                        <li><a href="#"><i class="ai-refund"></i> Refund Request</a></li>
                        <li class="hr"><a href="#"><i class="ai-settings"></i> Account Settings</a></li>
                        <li><a href="#"><i class="ai-logout"></i> Log out</a></li>
                    </ul>
                </div> 
            </div>	
        </div>
    </div>            
</header>
<main id="content" class="content">