<?php

use Dev4Press\Plugin\GDKOB\Front\Display;

get_header();

?>

<section id="primary" class="site-content">
    <div id="content" role="main">

        <header class="archive-header">
            <h1 class="archive-title">
                <?php _e("Knowledge Base Product Group Archives"); ?>
            </h1>
        </header>

        <?php

        if (have_posts()) :

            gdkob_load_template('gdkob-current-term.php');

            gdkob_load_template('gdkob-list-groups.php');

            while (have_posts()) : 
                the_post();

                gdkob_load_template('gdkob-product-archive.php');
            endwhile;

	        Display::instance()->posts_pagination();

        else :

            gdkob_load_template('gdkob-content-none.php');

        endif;

        ?>

    </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer();
