<?php get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <?php

        while (have_posts()) : 
            the_post();

            if (gdkob_query()->sub_type != '') {
                echo '<div class="gdkob-entry-wrapper gdkob-resource-archive">';

                gdkob_load_template('gdkob-product-resources.php');

                echo '</div>';
            } else {
                echo '<div class="gdkob-entry-wrapper">';

                gdkob_load_template('gdkob-product-single.php');

                echo '</div>';

                if (comments_open() || get_comments_number()) :
                    comments_template('', true);
                endif;
            }

        endwhile;

        ?>

    </div>
</div>

<?php get_sidebar(); ?>
<?php get_footer();