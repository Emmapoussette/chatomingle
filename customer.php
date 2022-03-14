<?php

get_header();?>
<div id="primary" calss="content-area">
    <div id="content" class="site-content" role="main">

    <?php while(have_posts()): the_post();?>
    <?php get_templete_part('content','page');?>
    <?php if(comments_open()||"0"!=get_comments_number());?>
        <?php comments_templete('',true);?>
        <?php endif;?>
        <?php endwhile;?>
</div>
</div>
<?php get_sidebar();?>
<?php get_footer();?>        

