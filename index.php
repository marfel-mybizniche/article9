<?php get_header() ?>

<section class="sec_article">
    <div class="grid-container">

        <div class="article_top">
            <a class="back_all" href=""><i class="ai-chev-left"></i>   Back to All Courses</a>
            <div class="prev_next">
                <a class="prev" href=""><i class="ai-triangle-left"></i> prev</a>
                <a class="next" href="">next <i class="ai-triangle-right"></i></a>
            </div>
        </div>

        <div class="article_body">
            <div class="grid-x grid-margin-x">
                <div class="cell large-8">
                    <div class="article_item">
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
            </div>
        </div>
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post() ?>
                <?php the_content() ?>
            <?php endwhile ?>
        <?php endif ?>
    </div>
</section>
<div>
    <a href="#" class="button secondary"><i class="ai-cartp"></i> Buy This COurse</a>    
</div>
<div>
    <a href="#" class="button secondary disabled"><i class="ai-cartp"></i> Buy This COurse</a>    
</div>
<div>
    <a href="#" class="button dark">Start Next Lesson</a>    
</div>
<div>
    <a href="#" class="button hollow">Buy This COurse</a>    
</div>
<div>
    <a href="#" class="button warning hollow">Buy This COurse</a>    
</div>

<?php get_footer() ?>