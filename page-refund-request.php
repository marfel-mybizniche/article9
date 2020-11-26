<?php get_header() ?>

<section class="sec_account">
    <div class="grid-container">
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><a href="/"><img width="18" src="<?php echo MBN_ASSETS_URI ?>/img/icn-apt.png" alt=""></a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Refund Request</a></li>
            </ul>
        </nav>

        <h1 class="page_title">APT Refund Request</h1>

        <div class="refund_request">
            <div class="grid-x gri-margin-x">
                <div class="cell medium-4 medium-order-2 align-self-middle">
                    <h5>Your Balance is:</h5>
                    <div class="balance">US$ 0.00</div>   
                </div>
                <div class="cell medium-8 medium-order-1">
                    <p>You are not eligible to request a refund at this point. <br> 
                    If you feel this message is in error, please</p>
                    <a href="#" class="button">Contact Us</a>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>