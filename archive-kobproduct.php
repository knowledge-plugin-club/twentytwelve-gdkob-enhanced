<?php get_header(); ?>

<section id="primary" class="site-content">
    <div id="content" role="main">

        <header class="archive-header">
            <h1 class="archive-title">
                <?php _e("Knowledge Base Products Archives"); ?>
            </h1>
        </header>

	    <?php

	    gdkob_load_main_template( 'archive', 'product' );

	    ?>

    </div>
</section>

<?php get_sidebar(); ?>
<?php get_footer();
