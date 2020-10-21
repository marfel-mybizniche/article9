<?php get_header() ?>

<section class="sec_checkout">
    <div class="grid-container">

        <h1 class="page_title">Checkout</h1>

        <div class="checkout_box">
            <div class="grid-x grid-margin-x">
                <div class="cell large-5">
                    <div class="checkout_register">
                        <h3>New to APT? <small class="ff-roboto">Are You An Agency? <a href="#">Click Here</a></small></h3>
                        <div class="field">
                            <input type="text" placeholder="First Name">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Last Name">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Password">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Confirm Password">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Email Address">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Confirm Email Address">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Phone">
                        </div>
                        <div class="field">
                            <label>
                                <input type="checkbox" name="" id="">
                                <span>Remember Me</span>
                            </label>
                        </div>
                        <div class="action">
                            <button class="button expanded">Create an account Now</button>
                        </div>
                        <p class="disclaimer">By clicking “Create an account” I am confirming I am 16 or older and I accept the Terms of Use, the Privacy Policy, the Cookies Policy, and agree to receive news and promotions.</p>
                        <p>Already have an account? <a href="#">Click here to login</a>!</p>
                    </div>
                </div>
                <div class="cell large-7">
                    <div class="checkout_course">
                        <div class="checkout_item">
                            <div class="grid-x grid-margin-x">
                                <div class="cell large-4">
                                    <figure class="course_img">
                                        <img src="<?php echo MBN_ASSETS_URI ?>/img/img-cover-article9.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="cell large-8">
                                    <div class="course_info">
                                        <div class="course_price">
                                            US$ 20.00
                                            <small>50% Disc. <s>US$ 40.00</s></small>
                                        </div>
                                        <h3>Article 9</h3>
                                        <p>A course by: <strong>Alison Pattison</strong></p>
                                        <ul>
                                            <li><i class="ai-certificate"></i> 1 CEU</li>
                                            <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                                            <li><i class="ai-clock"></i> 1 h 52m</li>
                                            <li><i class="ai-sound"></i> Audio: English(EN)</li>
                                            <li><i class="ai-infinity"></i> Unlimited access forever</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="course_timeline">
                                        <h5>Course contents</h5>
                                        <div class="scroller">
                                            <ul>
                                                <li>Disclaimer <span class="time">15s</span></li>
                                                <li>What You Will Learn <span class="time">15s</span></li>
                                                <li>Key Terms <span class="time">15s</span></li>
                                                <li>Who Must Follow Article 9 <span class="time">15s</span></li>
                                                <li>History <span class="time">15s</span></li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout_discount">
                            <div class="grid-x">
                                <div class="cell large-8 large-offset-4">
                                    <div class="label dark">Promos and Discounts</div>
                                    <div class="stotal">- US$ 20.00</div>
                                </div>
                            </div>
                        </div>

                        <div class="checkout_collaterals">
                            <div class="gtotal">
                                <small>Total:</small>
                                <span>US$ 20.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="disclaimer">You have 14 days from the time of your purchase to ask for a refund or exchange. For more information, check out our link section or get in touch with us at customerservice@ap.training.</div>
                </div>
                <div class="cell large-12">
                    <div class="sercure_payment">
                        <h3>100% secure payment</h3>
                        <p>This certificate guarantees that all your connections are secured by encryption. <br>
                        Your cards are stored safely, so you can reuse the payment method.</p>
                        <div class="method"><img src="<?php echo MBN_ASSETS_URI ?>/img/payment-method.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>