<?php get_header() ?>

<section class="sec_account">
    <div class="grid-container">
        <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
                <li><a href="/"><img width="18" src="<?php echo MBN_ASSETS_URI ?>/img/icn-apt.png" alt=""></a></li>
                <li><a href="#">My Account</a></li>
            </ul>
        </nav>

        <h1 class="page_title">My Account</h1>

        <div class="accout_info">
            <div class="grid-x grid-margin-x head">
                <div class="cell large-6">
                    <h2>Welcome Lauren!</h2>
                </div>
                <div class="cell large-2">
                    <div class="date">
                        <small>Joined On</small>
                        <span>07 Jul 2020</span>
                    </div>
                </div>
                <div class="cell large-2">
                    <div class="date">
                        <small>Joined On</small>
                        <span>07 Jul 2020</span>
                    </div>
                </div>
                <div class="cell large-2 align-self-middle text-right">
                    <a class="logout"><i class="ai-logout"></i> Log out</a>
                </div>
            </div>
            <hr>
            <div class="grid-x grid-margin-x info">
                <div class="cell large-6">
                    <div class="profile">
                        <figure><img src="<?php echo MBN_ASSETS_URI ?>/img/Lauren.jpg" alt=""></figure>
                        <h3 class="name ff-roboto">Lauren Klesser</h3>
                        <p>
                            <span class="email">lauren@mybizniche.com</span><br>
                            <span class="phone">+ 1 123 456 789</span>
                        </p>
                        <div class="edit">
                           <a href="#" class="button dark small nomin">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <div class="cell large-6">
                    <div class="endpoints">
                        <ul>
                            <li><a href="#"><i class="ai-quizes"></i> My Quiz/Exams</a></li>
                            <li><a href="#"><i><img src="<?php echo MBN_ASSETS_URI ?>/img/icn-order-history.svg" alt=""></i> My Order History</a></li>
                            <li><a href="#"><i class="ai-refund"></i> Refund Request</a></li>
                            <li><a href="#"><i class="ai-settings"></i> Account Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="your_courses">
            <div class="head">
                <h4><i class="ai-gradcap"></i> Your Courses <span class="badge dark">1</span></h4>
                <a href="#" class="btn_viewall">View all my courses <i class="ai-chev-right"></i></a>
            </div>
            <div class="list">
                <h4>New and Upcoming Courses</h4>
                <div class="grid-x grid-margin-x">
                    <div class="cell large-6 xlarge-4">
                        <div class="course_item">
                            <div class="date_image">
                                <figure class="course_img">
                                    <img src="<?php echo MBN_ASSETS_URI ?>/img/img-cover-article9.jpg" alt="">
                                </figure>
                                <div class="course_date">
                                    <div class="cd_top">
                                        <span class="cd_icon">
                                            <i class=" ai-online"></i>
                                        </span>
                                    </div>
                                    <div class="cd_bot">
                                        <span>Online <br>Course</span>
                                    </div>
                                </div>
                            </div>
                            <div class="course_details">
                                <h3>Article 9</h3>
                                
                                <ul class="course_info">
                                    <li><i class="ai-certificate"></i> 1 CEU</li>
                                    <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                                    <li><i class="ai-clock"></i> 1 h 52m</li>
                                </ul>

                                <p class="course_by">
                                    <img class="photo" src="<?php echo MBN_ASSETS_URI ?>/img/img-profile.jpg" alt=""> 
                                    A course by: Alison Pattison, EdD, is the Founder and Chief Executive Officer of Arizona Provider Training (APT).</p>
                            </div>

                            <div class="course_btn">
                                <button class="button secondary small expanded" type="submit">
                                    <i class="ai-play circle-dark"></i> Enroll Now
                                </button>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>