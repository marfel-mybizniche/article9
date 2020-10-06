<?php get_header() ?>

<section class="sec_article">
    <div class="grid-container">

        <div class="article_back">
            <a href=""><i class="ai-chev-left"></i>   Back to All Courses</a>
        </div>

        <div class="article_body">
            <div class="grid-x grid-margin-x">
                <div class="cell large-8 ">
                    <div class="article_copy">
                        <h2 class="course_title">Article 9</h2>
                        <div class="course_author">A course by: Alison Pattison, EdD, is the Founder and Chief Executive Officer of Arizona Provider Training (APT).</div>
                        <ul class="course_info">
                            <li><i class="ai-certificate"></i> 1 CEU</li>
                            <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                            <li><i class="ai-clock"></i> 1 h 52m</li>
                        </ul>
                        <div class="course_video">
                            <a class="btn-play" href="#"><img src="<?php echo MBN_ASSETS_URI ?>/img/img-cover-article9.jpg" alt=""></a>
                        </div>
                        <div class="course_desc">
                            <h3>About this course</h3>
                            <p>This course focuses on Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>
                </div>
                <div class="cell large-4">
                    <aside class="article_side">
                        <div class="course_buy">
                            <div class="price">
                                <small>Price:</small>
                                US$ 20.00
                                <ins>65% Disc. <del>US$ 40.00</del></ins>
                            </div>
                            <a href="#" class="button secondary expanded">
                                <i class="ai-cartp"></i> Buy This COurse
                            </a>
                            <p>Already have this course? <a href="#">Login now to access</a></p>
                        </div>
                        <hr>
                        <div class="course_info">
                            <ul>
                                <li><i class="ai-certificate"></i> 1 CEU</li>
                                <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                                <li><i class="ai-clock"></i> 1 h 52m</li>
                                <li><i class="ai-sound"></i> Audio: English(EN)</li>
                                <li><i class="ai-infinity"></i> Unlimited access forever</li>
                            </ul>
                        </div>
                        <div class="course_timeline">
                            <h5>Course contents</h5>
                            <div class="scroller">
                                <ul>
                                    <li class="done"><a href="#">Disclaimer</a> <span class="time">15s</span></li>
                                    <li class="active"><a href="#">What You Will Learn</a> <span class="time">15s</span></li>
                                    <li>Key Terms <span class="time">15s</span></li>
                                    <li>Who Must Follow Article 9 <span class="time">15s</span></li>
                                    <li>History <span class="time">15s</span></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="course_author">
                            <p><img src="<?php echo MBN_ASSETS_URI ?>/img/img-profile.jpg" alt="">  A course by: Alison Pattison, EdD, is the Founder and Chief Executive Officer of Arizona Provider Training (APT).</p> 
                        </div>
                        <div class="course_support">
                            <h5>Support</h5>
                            <a href="#" class="button hollow small round-1101"><i class="ai-chat"></i> Chat with our Instructor</a>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php //the_content() ?>
            <?php endwhile ?>
        <?php endif ?>
    </div>
</section>

<?php get_footer() ?>