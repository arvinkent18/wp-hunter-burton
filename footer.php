<footer>
    <div class="container">
        <div class="grid w-100" style= align:center>
          
            
            <?php
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'our-team',
        'order' => 'ASC'
    );

    $our_team = new WP_Query( $args );
?>

<div class="text-center mt-5 mb-5">
    <h2 class="display-4 mt-5 mb-5">Our Team</h2>
</div>

<?php if ( $our_team->have_posts() ): ?>

<?php while ( $our_team->have_posts() ) : $our_team->the_post(); ?>

<div class="mb-4 mt-2">
  
        <div class="media">
            <?php $image_src = has_post_thumbnail() ? the_post_thumbnail() : get_template_directory_uri() . '/assets/no-image.png'; ?>
            
            <div class="media-body pl-5 pt-5 pr-5">
                <h5 class="mt-0"><?php the_title(); ?></h5>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>
<? else?>
            
        
           
            <h2 class="display-4 mt-5 mb-3" style = "text-align: center; font-weight: bold">Our Clients</h2>

            <div class="row justify-content-center" >
            <img src="<?php echo get_template_directory_uri();?>/assets/web_14.png" class="" alt="" 
            style = "margin-left:0; margin-top:50px>; width: auto; height: 18vw;">
    
        </div>
        <div class="row-fluid" style = "background-color:#4775b9; height: 300px;">
            <h2 class="display-4 mt-1 mb-5  pt-4" style = "text-align: center; font-weight: bold; color:white;">Employment</h2>
            <p style = "text-align: center; margin:0; color: white;">We are always looking for team members to join our consulting team as well as client positions listed below. If you are looking for a unique opportunity to support</p>
            <p style = "text-align: center; margin:0; padding-bottom: 10px; color: white;"> our constituents, amazing business owners and organization leaders please email us at info@hunterburtoninc.com</p>

            </div>
        <div class="row-fluid justify-content-center" style = "background-color: #d6d6d6;">
        <div class ="justify-content-center">
    <h2 class="mt-0 mb-1 pt-4" style = "text-align: center; font-weight: bold">Contact us</h2>
    <h2 class=" mt-1 mb-1" style = "text-align: center;"><small>Send us a message</small></h2>
</div>
<div>
    <form action="#" style = "text-align: center;">
 
    <input type="text" id="fname" name="firstname" placeholder="Your name">

    
    
    <input type="email" id="email" name="email" placeholder= "Email*">

    

    <textarea id="subject" name="subject" placeholder="Message" style="height:200px"></textarea>
    <p style = "text-align: center"><small>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply. </small></P>
    <input type="submit" value="Send" style = "margin-bottom: 13px;">
  </form>
</div>
    </div>


    <div class="row-fluid d-flex" style = "background-color:white; height: 300px;" id = "futer">
        
        <div class="col-md-6">
            <img width=auto height="128" 
            src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="custom-logo"
                alt="" style = "margin-top:50px; margin-left: 200px;"></a>
                <br>
                <p style = "margin-left: 200px">Dara is an award-winning florist in San Diego, CA providing flowers<pan><br> for weddings and events.</span>
                    <span><br>We offer flower delivery all over San Diego and California.</span></p>
                    <br>
                <p  style = "margin-left: 200px">Hunter Burton Consulting
                <span><br>2117 Chenevert St, Houston, Texas 77003, United States</span>
                <span><br>713.834.7540 / paula@hunterburtoninc.com</span></p>
        </div>
        
        <div class="col-md-6">
        <br>    
        <div style = "margin-left: 150px;">
        <i class="fa fa-facebook-f" style="font-size:48px;color:blue; margin-top: 50px; margin-left: 100px;"></i>
        <i class="fa fa-linkedin-square" style="font-size:48px;color:blue; margin-top: 50px; margin-left: 30px;"></i>
        <i class="fa fa-twitter" style="font-size:48px;color:blue; margin-top: 50px; margin-left: 30px;"></i>
        </div>
        </div>

    </div>
    </div>               
           
            
            







         </div>     
    </div>
</footer>
<?php wp_footer(); ?>
<?php endif; ?>
</body>

</html>
