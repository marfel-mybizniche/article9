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
                        <div class="course_author">A course by: <strong>Alison Pattison</strong>, EdD, is the Founder and Chief Executive Officer of Arizona Provider Training (APT).</div>
                        <hr>
                        <h3 class="fw-light text-primary ff-roboto">Disclaimer</h3>
                        <ul class="course_info">
                            <li class="na"><i class="ai-clock"></i> 15s</li>
                        </ul>
                        <div class="course_quiz border clearfix">
                            <h3 class="fw-light ff-roboto">Quiz time</h3>
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
                                    <div class="label success rounded"><i class="ai-check-circle"></i> You got it right!</div>
                                </div>
                                <div class="float-right">
                                    <a href="#" class="button dark"><i class="ai-play circle"></i> Start Next Lesson</a>
                                </div>
                            </div>
                        </div>
                        <div class="course_desc">
                            <h3>About this course</h3>
                            <p>This course focuses on Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                            <div class="course_files">
                                <h5 class="fw-normal">Course Files</h5>
                                <a href="#" class="button hollow small download">Download Article 9 Course Files <i class="ai-download right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cell large-4">
                    <aside class="article_side">
                        <div class="course_start">
                            <a href="#" class="button expanded dark"><i class="ai-play circle"></i> Start Next Lesson</a>
                        </div>
                        <div class="course_info">
                            <ul>
                                <li><i class="ai-certificate"></i> 1 CEU </li>
                                <li><i class="ai-filmstrip"></i> 17 Lessons</li>
                                <li><i class="ai-clock"></i> 1 h 52m</li>
                                <li><i class="ai-sound"></i> Audio: English(EN)</li>
                                <li><i class="ai-infinity"></i> Unlimited access forever</li>
                            </ul>
                        </div>
                        <hr>
                        <div class="course_timeline">
                            <div class="course_progress">
                                <h5>Course contents</h5>
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
                            <div class="scroller">
                                <ul>
                                    <li class="active"><a href="#">Disclaimer</a> <span class="time">15s</span> </li>
                                    <li>What You Will Learn <span class="time">15s</span></li>
                                    <li>Key Terms <span class="time">15s</span></li>
                                    <li>Who Must Follow Article 9 <span class="time">15s</span></li>
                                    <li>History <span class="time">15s</span></li> 
                                </ul>
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