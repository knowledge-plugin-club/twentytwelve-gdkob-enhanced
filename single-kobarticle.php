<?php get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php

        while (have_posts()) : 
            the_post();

            gdkob_load_template('gdkob-article-single.php');

            if (comments_open() || get_comments_number()) :
                comments_template('', true);
            endif;

        endwhile;

        ?>

    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer();