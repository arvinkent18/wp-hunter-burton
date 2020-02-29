<?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'services',
        'order' => 'ASC'
    );

    $services = new WP_Query( $args );
?>

<div class="text-center mt-5 mb-5">
    <label class="info-btns">About Us</label>
    <h2 class="display-3 mt-5 mb-5">Our Services</h2>
</div>

<?php if ( $services->have_posts() ): ?>

<?php while ( $services->have_posts() ) : $services->the_post(); ?>

<div class="card mb-4 mt-2">
    <div class="card-body">
        <div class="media">
            <?php $image_src = has_post_thumbnail() ? the_post_thumbnail() : get_template_directory_uri() . '/assets/no-image.png'; ?>
            <img class="img-fluid mr-3" src="<?php echo $image_src; ?>" alt="">
            <div class="media-body pl-5 pt-5 pr-5">
                <h5 class="mt-0"><?php the_title(); ?></h5>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php else: ?>
<div class="row no-gutters justify-content-center align-self-center">
    <div class="col-md-12">


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="456" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_03.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Business Start Up and Launch</h5>

                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <ul>
                                    <li> New business selections consult </li>
                                    <li>Business feasibility analysis</li>
                                    <li>Mind mapping</li>
                                    <li>Market Analysis </li>
                                </ul>
                            </div>



                            <div class="wp-block-column">
                                <ul>
                                    <li>Strategic Business Plan</li>
                                    <li>Business launch plan</li>
                                    <li>Access to resources to execute planning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="458" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_07.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body pl-5 pt-5 pr-5">
                        <h5 class="mt-0">Business Expansion</h5>

                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <ul>
                                    <li>Facilitate innovative solutions design sessions</li>
                                    <li>Design a strategic framework for improvements/expansion </li>
                                    <li>Create road-map/project plan execute work</li>
                                </ul>
                            </div>



                            <div class="wp-block-column">
                                <ul>
                                    <li>Recommend systems/technology to support next steps</li>
                                    <li>Access to resources for change management</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="460" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_11.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Business Entity Formation Starter Pack</h5>

                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <ul>
                                    <li>Name Search of Entity</li>
                                    <li>Certificate of Formation</li>
                                    <li>Drafting of Company Agreement between </li>
                                    <li>Owners or Client Services Agreement</li>
                                </ul>
                            </div>



                            <div class="wp-block-column">
                                <ul>
                                    <li>Secure Federal TAX ID.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="467" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_14.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Marketing 360</h5>

                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <ul>
                                    <li>Research and competitor analysis</li>
                                    <li>Target audience segmentation</li>
                                    <li>Branding and reputation building</li>
                                    <li>Social media and digital components</li>
                                </ul>
                            </div>



                            <div class="wp-block-column">
                                <ul>
                                    <li>Narrative content for website and digital</li>
                                    <li>Ongoing marketing consult to keep planning on track</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="458" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_17.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">HR Solutions</h5>

                        <ul>
                            <li>Payroll set up and support</li>
                            <li>New hire onboarding (background and reference check)</li>
                            <li>Human resource policy support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="458" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_19.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Business Documents In a Box</h5>

                        <p>Common business documents templates: <br>• Statement of Work Template<br>• Client
                            Contract<br>• Consultant Contract Template</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="467" height="286"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_21.gif"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""> <img
                        class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Technology</h5>

                        <div class="wp-block-columns">
                            <div class="wp-block-column">
                                <ul>
                                    <li>Team email setup (includes signature)</li>
                                    <li>Digital and social media setup</li>
                                    <li>Google business page setip</li>
                                </ul>
                            </div>



                            <div class="wp-block-column">
                                <ul>
                                    <li>Options for calendar meeting setup</li>
                                    <li>E-commerce setup</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card mb-4 mt-2">
            <div class="card-body">
                <div class="media">
                    <img width="467" height="275"
                        src="<?php echo get_template_directory_uri(); ?>/assets/services_23.png"
                        class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                        srcset="<?php echo get_template_directory_uri(); ?>/assets/services_23.png 467w, <?php echo get_template_directory_uri(); ?>/assets/services_23-300x177.png 300w"
                        sizes="(max-width: 467px) 100vw, 467px"> <img class="img-fluid mr-3" src="" alt="">
                    <div class="media-body p-5">
                        <h5 class="mt-0">Consulting</h5>

                        <p>Our team is available to consult with clients and teams to support success.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>