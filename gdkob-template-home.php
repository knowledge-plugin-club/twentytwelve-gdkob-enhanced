<?php
/**
 * Template Name: GDKOB Template, Full Width
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

    <div id="primary" class="site-content">
        <div id="content" role="main">

<div class="gdkob-home-block gdkob-home-block-search">
    <h1 class="block-title">GD Knowledge Base Pro</h1>
    <div class="block-subtitle">Start by searching, or browse the knowledge base and forums listed below</div>

    <?php gdkob_load_template('gdkob-search-form.php');?>
</div>

<div class="gdkob-home-block gdkob-home-block-quick">
    <div class="gdkob-grid">
        <div class="gdkob-unit one-third">
            <i class="gdkob-icon gdkob-icon-bookmark"></i>
            <h3>The Knowledge Base</h3>
            <p>Categorized articles, user guides and developer references on various topics.</p>
            <a href="<?php echo get_post_type_archive_link(gdkob()->posttype_user_guide()); ?>">Guides</a> &middot; 
            <a href="<?php echo get_post_type_archive_link(gdkob()->posttype_article()); ?>">Articles</a> &middot; 
            <a href="<?php echo get_post_type_archive_link(gdkob()->posttype_reference()); ?>">References</a>
        </div>
        <div class="gdkob-unit one-third">
            <i class="gdkob-icon gdkob-icon-tag"></i>
            <h3>Frequently Asked Questions</h3>
            <p>Most important questions answered for getting quick help.</p>
            <a href="<?php echo get_post_type_archive_link(gdkob()->posttype_faq()); ?>">Get Answers</a>
        </div>
        <div class="gdkob-unit one-third">
            <i class="gdkob-icon gdkob-icon-comments"></i>
            <h3>Support Forums</h3>
            <p>bbPress powered forums to ask any question related to our products.</p>
            <a href="<?php echo gdkob_has_bbpress() ? bbp_get_forums_url() : get_site_url(); ?>">Ask Away</a>
        </div>
    </div>
</div>

<div class="gdkob-home-block gdkob-home-block-terms">
    <div class="gdkob-grid">
        <div class="gdkob-unit one-third">
            <h3>Product Groups</h3>
            <?php echo gdkob_get_render_groups(); ?>

            <h3 style="margin-top: 1em">User Guide Categories</h3>
            <?php echo gdkob_get_render_categories(array('type' => 'user_guide')); ?>

            <h3 style="margin-top: 1em">Reference Topics</h3>
            <?php echo gdkob_get_render_topics(); ?>
        </div>
        <div class="gdkob-unit one-third">
            <h3>FAQ Categories</h3>
            <?php echo gdkob_get_render_categories(array('type' => 'faq')); ?>
        </div>
        <div class="gdkob-unit one-third">
            <h3>Articles Categories</h3>
            <?php echo gdkob_get_render_categories(array('type' => 'article')); ?>
        </div>
    </div>
</div>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>