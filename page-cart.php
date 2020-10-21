<?php get_header() ?>

<section class="sec_cart">
    <div class="grid-container">

        <h1 class="page_title">Cart</h1>

        <div class="pcart_box">
            <div class="text-right">
                <a href="#" class="btn_proceed">Proceed to Checkout <i class="ai-chev-right"></i></a>
            </div>

            <div class="pcart_list">
                <div class="pcart_item">
                    <div class="grid-x grid-margin-x">
                        <div class="cell large-3">
                            <figure class="pcart_img">
                                <img src="<?php echo MBN_ASSETS_URI ?>/img/img-cover-article9.jpg" alt="">
                            </figure>
                        </div>
                        <div class="cell large-6">
                            <div class="pcart_info">
                                <h3>Article 9</h3>
                                <p>A course by: <strong>Alison Pattison</strong></p>
                                <ul class="two-cols">
                                    <li><i class="ai-certificate"></i> 1 CEU</li>
                                    <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                                    <li><i class="ai-clock"></i> 1 h 52m</li>
                                    <li><i class="ai-sound"></i> Audio: English(EN)</li>
                                    <li><i class="ai-infinity"></i> Unlimited access forever</li>
                                </ul>
                            </div>
                        </div>
                        <div class="cell large-3">
                            <div class="pcart_price">
                                US$ 20.00
                                <small>50% Disc. <s>US$ 40.00</s></small>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="delete"><i class="ai-close"></i></a>
                </div>
            </div>

            <div class="pcart_discount">
                <div class="label dark">Promos and Discounts</div>
                <div class="stotal">- US$ 20.00</div>
            </div>

            <div class="pcart_collaterals">
                <div class="gtotal">
                    <small>Total:</small>
                    <span>US$ 20.00</span>
                </div>
                <div class="checkout">
                    <a href="#" class="button secondary nomin btn_checkout">
                        <i class="ai-cart"></i> Checkout
                    </a>
                    <div class="method"><img src="<?php echo MBN_ASSETS_URI ?>/img/payment-method.png" alt=""></div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>