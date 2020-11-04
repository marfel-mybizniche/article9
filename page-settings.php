<?php get_header() ?>

<section class="sec_account">
    <div class="grid-container">
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><a href="/"><img width="18" src="<?php echo MBN_ASSETS_URI ?>/img/icn-apt.png" alt=""></a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Account Settings</a></li>
            </ul>
        </nav>

        <h1 class="page_title">Account Settings</h1>
 
        <div class="account_settings">
            <div class="your_photo">
                <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/Lauren.jpg" alt=""></figure>
                <p>
                    <a href="#">Upload new photo</a>  &bull; <a href="#">Remove photo</a><br>
                    Photos help your instructors recognize you in APT
                </p>
            </div> 
            <div class="your_fields">
                <h5>Your name</h5>
                <div class="fields">
                    <div class="field">
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
            </div>
            <div class="your_fields">
                <h5>Account logins</h5>
                <div class="field">
                    <input type="password" placeholder="Current Password">
                </div>
                <div class="field">
                    <input type="password" placeholder="New Password">
                </div>
                <div class="field">
                    <input type="password" placeholder="Confirm New Password">
                </div>
            </div>
            <div class="your_fields">
                <h5>Contact Information</h5>
                <div class="field">
                    <input type="text" placeholder="Email Address">
                </div>
                <div class="field">
                    <input type="text" placeholder="Confirm Email Address">
                </div>
                <div class="field">
                    <input type="text" placeholder="Phone">
                </div>
            </div>
            <div class="your_action grid-x grid-margin-x">
                <div class="cell large-4">
                    <button class="button discard expanded">Discard Changes</button>
                </div>
                <div class="cell large-8">
                    <button class="button expanded">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>