<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'services',
        'order' => 'ASC'
    );

    $services = new WP_Query( $args );
?>
<div class="col-md-12">
<?php if ( $services->have_posts() ): ?>

    <?php while ( $services->have_posts() ) : $services->the_post(); ?>

    <div class="card mb-4 mt-2">
        <div class="card-body">
            <div class="media">
                <?php $image_src = has_post_thumbnail() ? the_post_thumbnail() : get_template_directory_uri() . '/assets/no-image.png'; ?>
                <img class="img-fluid mr-3" src="<?php echo $image_src; ?>" alt="">
                <div class="media-body p-5">
                    <h5 class="mt-0"><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php endwhile; ?>

<?php endif; ?>
</div>