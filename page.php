<?php get_header(); ?>
<div class="container">
    <div class="grid">
        <?php get_template_part('template-parts/content-services', get_post_format()); ?>
        <?php get_template_part('template-parts/content-single', get_post_format()); ?>
    </div>
</div>
<?php get_footer(); ?>