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
                        <h2 class="title">Article 9</h2>
                        <div class="author">A course by: Alison Pattison, EdD, is the Founder and Chief Executive Officer of Arizona Provider Training (APT).</div>
                        <ul class="info">
                            <li><i class="ai-certificate"></i> 1 CEU</li>
                            <li><i class="ai-filmstripe"></i> 17 Lessons</li>
                            <li><i class="ai-clock"></i> 1 h 52m</li>
                        </ul>
                        <div class="video">
                            <img src="<?php echo MBN_ASSETS_URI ?>/img/img-cover-article9.jpg" alt="">
                        </div>
                        <div class="description">
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
                                <span>65% Disc. US$ 40.00</span>
                            </div>
                            <div class="buy">
                                <a href="#" class="button secondary expanded">
                                    <i class="ai-cartp"></i> Buy This COurse
                                </a>
                            </div>
                            <p>Already have this course? <a href="#">Login now to access</a></p>
                        </div>
                        <div class="course_info">
                            <ul>
                                <li><i class="ai-certificate"></i> 1 CEU</li>
                                <li><i class="ai-filmstripe"></i> 17 Lessons</li>
                                <li><i class="ai-clock"></i> 1 h 52m</li>
                            </ul>
                        </div>
                        <div class="course_contents">
                            <ul>
                                <li class="done"><a href="#">Disclaimer</a></li>
                                <li class="active"><a href="#">What You Will Learn</a></li>
                                <li>Key Terms</li>
                                <li>Who Must Follow Article 9</li>
                                <li>History</li>
                            </ul>
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