<?php get_header(); ?>
<div id="main-content">
    <div class="grid">
        <?php get_template_part('template-parts/content', get_post_format()); ?>
    </div>
</div>
<?php get_footer(); ?>