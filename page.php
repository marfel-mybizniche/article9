<?php get_header() ?>


<section class="sec_article">
    <div class="grid-container">
        <div class="grid-x grid-margin-x">
            <div class="cell medium-3">
                <div>
                    <a href="#" class="button secondary expanded"><i class="ai-cartp"></i> Buy This COurse</a>
                </div>
                <div>
                    <a href="#" class="button secondary expanded"><i class="ai-play-circle"></i> Start Course</a>
                </div>
                <div>
                    <a href="#" class="button dark expanded"><i class="ai-play circle"></i> Start Next Lesson</a>
                </div>
                <div>
                    <a href="#" class="button secondary hollow expanded"><i class="ai-edit circle"></i> Start Quiz: <span>DIsclaimer</span></a>
                </div>
                <div>
                    <a href="#" class="button warning hollow expanded"><i class="ai-play-next"></i> Start Quiz: <span>DIsclaimer</span></a>
                </div>
                <div>
                    <a href="#" class="button hollow small round-1101 expanded"><i class="ai-chat"></i> Chat with our Instructor</a>
                </div>
                <div> 
                    <a href="#" class="button hollow small expanded">Download Article 9 Course Files <i class="ai-download"></i></a>
                </div>
                <div> 
                    <a href="#" class="button hollow small"><i class="ai-play-next"></i> Check Answer</a>
                </div>
                <div>
                    <a href="#" class="button hollow small"><i class="ai-play circle"></i> Check Answer</a>
                </div>
            
            </div>
        </div>
    </div>
</section>
<?php if(have_posts()): ?>
    <?php while(have_posts()): the_post() ?>
        <?php the_content() ?>
    <?php endwhile ?>
<?php endif ?>

<?php get_footer() ?>