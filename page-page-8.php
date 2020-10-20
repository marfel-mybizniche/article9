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
                        <hr>
                        <div class="course_timer">
                            <small>Exam Time Remaining</small>
                            <span class="ff-oswald">00:29:59</span>
                        </div>
                        <h3 class="fw-light text-primary ff-roboto">Final Examination</h3>
                        <ul class="course_info">
                            <li class="na"><i class="ai-clock"></i> 30mins</li>
                        </ul>
                        <div class="course_quiz clearfix border min">
                            <h3 class="fw-light ff-roboto">Question 1 of 2</h3>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur? Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum?</p>
                            <ul class="quiz_choices">
                                <li class="custom-radio">
                                    <label>
                                        <input type="radio" name="answer" id="" checked=""> 
                                        <span>Answer A</span>
                                    </label>
                                </li>
                                <li class="custom-radio">
                                    <label>
                                        <input type="radio" name="answer" id=""> 
                                        <span>Answer B</span>
                                    </label>
                                </li>
                                <li class="custom-radio">
                                    <label>
                                        <input type="radio" name="answer" id=""> 
                                        <span>Answer C</span>
                                    </label>
                                </li>
                                <li class="custom-radio">
                                    <label>
                                        <input type="radio" name="answer" id=""> 
                                        <span>All of the above</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="quiz_action">
                                <div class="float-left">
                                </div>
                                <div class="float-right">
                                <a href="#" class="button secondary  disabled"><i class="ai-to-end circle"></i> Next</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell large-4">
                    <aside class="article_side">
                        <div class="course_progress">
                            <h5>Exam progress</h5>
                            <div class="progress_box">
                                <div class="range">
                                    <span class="handle"></span>
                                    <span class="fill" style="width:1px"></span>
                                </div>   
                                <div class="output">
                                    <div class="left">0% Complete</div>
                                    <div class="right"><span>0</span> / 2</div>
                                </div>
                            </div>
                        </div>
                        <hr>
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