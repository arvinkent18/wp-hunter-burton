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
<?php else: ?>
    <div class="grid w-100" style="align:center">
          
            
           


<div class="mb-4 mt-2">
  
        <div class="media">
                        
            <div class="media-body pl-5 pt-5 pr-5">
                <h5 class="mt-0"></h5>
                
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="<?php echo get_template_directory_uri(); ?>/assets/web_03.gif" alt="" class="wp-image-81"></figure><div class="wp-block-media-text__content">
<p class="has-large-font-size"> Dr&nbsp;Charles&nbsp;Hunter,&nbsp;Founder </p>



<p> Pastor&nbsp;and&nbsp;Dr.&nbsp;Hunter&nbsp;has&nbsp;worked&nbsp;in&nbsp;many&nbsp;fields&nbsp;from&nbsp;Chair&nbsp;of&nbsp;Chemistry&nbsp;Department&nbsp;at&nbsp;Hampton&nbsp;University;&nbsp;Chemical&nbsp;Engineer&nbsp;at&nbsp;Ford&nbsp;Motor;&nbsp;Ford&nbsp;Dealer&nbsp;owner;&nbsp;and&nbsp;now&nbsp;retired&nbsp;pastor&nbsp;at&nbsp;local&nbsp;church.&nbsp;He&nbsp;and&nbsp;wife,&nbsp;Portia&nbsp;established&nbsp;Hunter&nbsp;Burton&nbsp;Inc.&nbsp;as&nbsp;a&nbsp;family&nbsp;business&nbsp;in&nbsp;1994&nbsp;to&nbsp;support&nbsp;the&nbsp;family&nbsp;business&nbsp;and&nbsp;now&nbsp;to&nbsp;service&nbsp;entrepreneurs&nbsp;and&nbsp;established&nbsp;business&nbsp;owners. <br><br>Dr.&nbsp;Hunter&nbsp;earned&nbsp;a&nbsp;Ph.D&nbsp;in&nbsp;Physical&nbsp;Chemistry&nbsp;at&nbsp;Howard&nbsp;University;&nbsp;MS&nbsp;in&nbsp;Computer&nbsp;Engineering,&nbsp;Wayne&nbsp;State&nbsp;University;&nbsp;BS&nbsp;in&nbsp;Chemistry&nbsp;and&nbsp;Mathematics&nbsp;at&nbsp;Hampton&nbsp;University;&nbsp;Religious&nbsp;Studies&nbsp;at&nbsp;Houston&nbsp;Baptist&nbsp;University. </p>
</div></div>
            </div>
        </div>
    </div>
</div>    
        <div class="mb-4 mt-2">
  
        <div class="media">
                        
            <div class="media-body pl-5 pt-5 pr-5">
                <h5 class="mt-0"></h5>
                
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="http://localhost/wordpress/wp-content/uploads/2020/03/web_03-1.gif" alt="" class="wp-image-85"></figure><div class="wp-block-media-text__content">
<p class="has-large-font-size"> Paula&nbsp;Whitfield,&nbsp;Owner&nbsp;and&nbsp;Managing&nbsp;Partner </p>



<p> Paula&nbsp;H.&nbsp;Whitfield&nbsp;has&nbsp;more&nbsp;than&nbsp;15&nbsp;years&nbsp;of&nbsp;experience&nbsp;as&nbsp;an&nbsp;operational&nbsp;leader&nbsp;in&nbsp;developing&nbsp;solutions&nbsp;for&nbsp;clients&nbsp;to&nbsp;meet&nbsp;performance&nbsp;and&nbsp;profit&nbsp;expectations&nbsp;utilizing&nbsp;varied&nbsp;business&nbsp;practices,&nbsp;technology&nbsp;and&nbsp;core&nbsp;competencies.&nbsp;Her&nbsp;areas&nbsp;of&nbsp;expertise&nbsp;are&nbsp;strategy,&nbsp;process&nbsp;improvement,&nbsp;project&nbsp;management,&nbsp;change&nbsp;management,&nbsp;and&nbsp;business&nbsp;acquisitions.&nbsp;Paula’s&nbsp;business&nbsp;acumen&nbsp;developed&nbsp;during&nbsp;her&nbsp;tenure&nbsp;in&nbsp;key&nbsp;positions&nbsp;at&nbsp;corporations&nbsp;in&nbsp;the&nbsp;automotive,&nbsp;oil&nbsp;and&nbsp;gas,&nbsp;and&nbsp;healthcare&nbsp;industries.&nbsp;She&nbsp;has&nbsp;coached&nbsp;business&nbsp;owners&nbsp;to&nbsp;improve&nbsp;performance&nbsp;and&nbsp;create&nbsp;programs&nbsp;and&nbsp;training&nbsp;to&nbsp;sustain&nbsp;and&nbsp;improve&nbsp;profitability.&nbsp;Paula’s&nbsp;has&nbsp;a&nbsp;track&nbsp;record&nbsp;of&nbsp;leading&nbsp;corporate&nbsp;project&nbsp;teams&nbsp;and&nbsp;small&nbsp;business&nbsp;innovation&nbsp;entrepreneurs&nbsp;to&nbsp;create&nbsp;solutions&nbsp;and&nbsp;problem&nbsp;solve.&nbsp;Her&nbsp;background&nbsp;over&nbsp;the&nbsp;years&nbsp;has&nbsp;allowed&nbsp;her&nbsp;to&nbsp;leverage&nbsp;finance,&nbsp;data&nbsp;analysis,&nbsp;technology&nbsp;and&nbsp;intuitive&nbsp;business&nbsp;knowledge&nbsp;as&nbsp;she&nbsp;consults&nbsp;her&nbsp;clients&nbsp;to&nbsp;successful&nbsp;outcomes.&nbsp; <br><br>Paula&nbsp;earned&nbsp;a&nbsp;Bachelor&nbsp;of&nbsp;Business&nbsp;Administration&nbsp;Degree&nbsp;with&nbsp;a&nbsp;concentration&nbsp;in&nbsp;Finance&nbsp;from&nbsp;Howard&nbsp;University.&nbsp;She&nbsp;also&nbsp;holds&nbsp;a&nbsp;Prosci&nbsp;Change&nbsp;Practitioner&nbsp;Certificate&nbsp;and&nbsp;she’s&nbsp;pursuing&nbsp;an&nbsp;MBA&nbsp;at&nbsp;Louisiana&nbsp;State&nbsp;University. </p>
</div></div>
            </div>
        </div>
    </div>
        <div class="mb-4 mt-2">
  
        <div class="media">
                        
            <div class="media-body pl-5 pt-5 pr-5">
                <h5 class="mt-0"></h5>
                
<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="http://localhost/wordpress/wp-content/uploads/2020/03/web_03-2.gif" alt="" class="wp-image-89"></figure><div class="wp-block-media-text__content">
<p class="has-large-font-size"> Sucre&nbsp;Woodley,&nbsp;MHSA,&nbsp;Marketing&nbsp;Strategist </p>



<p> Sucre&nbsp;Elizabeth&nbsp;Woodley&nbsp;is&nbsp;a&nbsp;master&nbsp;level&nbsp;marketing,&nbsp;communications,&nbsp;digital&nbsp;media&nbsp;and&nbsp;public&nbsp;relations&nbsp;strategist&nbsp;with&nbsp;more&nbsp;than&nbsp;18&nbsp;years&nbsp;of&nbsp;industry&nbsp;experience.&nbsp;&nbsp;Her&nbsp;multifaceted&nbsp;professional&nbsp;experience&nbsp;includes&nbsp;a&nbsp;10 year&nbsp;career&nbsp;as&nbsp;a&nbsp;marketing&nbsp;and&nbsp;business&nbsp;development&nbsp;leader&nbsp;at&nbsp;Henry&nbsp;Ford&nbsp;Health&nbsp;System&nbsp;in&nbsp;Detroit,&nbsp;Michigan&nbsp;and&nbsp;more&nbsp;than&nbsp;six&nbsp;years&nbsp;in&nbsp;a&nbsp;marketing&nbsp;and&nbsp;communications&nbsp;leadership&nbsp;role&nbsp;at&nbsp;Houston&nbsp;Methodist&nbsp;in&nbsp;Houston,&nbsp;Texas.&nbsp;Sucre&nbsp;has&nbsp;a&nbsp;win-win&nbsp;communication&nbsp;style.&nbsp;She&nbsp;is&nbsp;particularly&nbsp;strong&nbsp;at&nbsp;reputation&nbsp;building&nbsp;and&nbsp;developing&nbsp;winning&nbsp;narratives&nbsp;for&nbsp;organizations.&nbsp;Her&nbsp;extensive&nbsp;professional&nbsp;career&nbsp;in&nbsp;marketing,&nbsp;communications&nbsp;and&nbsp;business&nbsp;development&nbsp;is&nbsp;backed&nbsp;by&nbsp;impressive&nbsp;credentials.&nbsp; <br> Sucre&nbsp;graduated&nbsp;from&nbsp;Howard&nbsp;University&nbsp;in&nbsp;Washington,&nbsp;D.C.&nbsp;with&nbsp;a&nbsp;Bachelors&nbsp;in&nbsp;Business&nbsp;Administration.&nbsp;She&nbsp;earned&nbsp;a&nbsp;Masters&nbsp;in&nbsp;Health&nbsp;Services&nbsp;Administration&nbsp;from&nbsp;The&nbsp;University&nbsp;of&nbsp;Michigan&nbsp;in&nbsp;Ann&nbsp;Arbor,&nbsp;Michigan. </p>
</div></div>
            </div>
        </div>
    </div>
<?php endif; ?>
            
        
           
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
                alt="" style = "margin-top:50px;"></a>
                <br>
                <p>Dara is an award-winning florist in San Diego, CA providing flowers<pan><br> for weddings and events.</span>
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

</body>

</html>
