<?php
/**
 * The main template file.
 *
 * This theme is purely for the purpose of testing theme options in Options Framework plugin.
 *
 * @package WordPress
 * @subpackage Options Framework Theme
 */

get_header();


?>
  <?php while ( have_posts() ) : the_post(); ?>

      <header class="main-top">
        <div class="container-fluid">
          <div class="inner-container">
              <h1 class="logo">Android Heroes</h1>
              <div class="clearfix"></div>
              <div class="row-fluid">
                <div class="intro slide-intro span6">
                  <h2><?php the_field('intro_title'); ?></h2>
                  <p><?php the_field('intro_description'); ?></p>
                  <a href="#get-in-touch" class="btn btn-success btn-large get-in-touch"><span>Get in touch</a>
                </div> <!-- /intro -->
                <div class="android-slider hidden-phone span9 offset6">
                  <?php if(get_field('intro_image')) : ?><img src="<?php the_field('intro_image'); ?>" /><?php else: ?><img src="<?php theme_images(); ?>android-phone.png" /><?php endif; ?>

                </div> <!-- /android-slider -->
              </div> <!-- /row-fluid -->
          </div><!-- /inner-container -->
        </div><!-- /container-fluid -->
      </header> <!-- /main-top -->

        <?php 
         // or has_sub_field + the_sub_field
        $projects = get_field('projects');

        if($projects): ?>

                <?php while(has_sub_field('projects')): ?>
                <?php 
                      $img_position = get_sub_field('image_position');
                      $android = get_sub_field('android_color');
                ?>
          <section class="featured-work container-fluid <?php if($img_position == 'Left') { echo 'align-left'; } else { echo 'align-right'; } ?>">
              <div class="row-fluid inner-container ">



              
         
                  <div class="feat-image-work" >
                  <img class="project-image" src="<?php theme_images(); ?>android-phone-<?php if($android == 'white') { echo 'white'; } else { echo 'black'; } ?>.png" />
                  <div id="featured-carousel" class="featured-carousel carousel slide carousel-fade">
                    
                    <div class="carousel-inner">
                  <?php while(has_sub_field('project_images')): ?> 
                
                  <!-- Carousel items -->      
                  <div class="item">
                    <img src="<?php the_sub_field('project_image'); ?>" />
                  </div> <!-- /item -->
                  <?php endwhile; ?>
                  </div> <!-- /carousel-inner -->
                  </div> <!-- /featured-carousel -->
                   </div>  <!-- /feat-image-work -->
   
                 
                <div class="span7 details"><h2><?php the_sub_field('project_title'); ?></h2>
                    <p class="lead"><?php the_sub_field('project_leader'); ?></p>

                    <?php the_sub_field('project_details'); //Project details here ?>

                    <?php if(get_sub_field('project_features')) : // Are there any features? ?>
                    <ul class="list-features">
                      <?php while(has_sub_field('project_features')) : // Are there any features? ?>
                        <li><?php the_sub_field('project_feature'); ?></li>
                      <?php endwhile; ?>
                    </ul> <!-- / list-item -->
                    <?php endif; ?>
                    <a class="btn btn-large btn-secondary" href="<?php the_sub_field('project_button_link'); ?>"><?php the_sub_field('project_button_text'); ?></a>
                </div><!-- /span6 -->
          
              </div> <!-- /row-fluid -->
          </section> <!-- /featured-work container-fluid -->
                 <?php endwhile; ?>
        <?php endif; ?>
      

   
        <section class="portfolio container-fluid">
          <div class="row-fluid inner-container">
            <div class="span12 center-text">
              <h2>Super awesome marketing speak!</h2>
              <p class="lead">Here’s a look at some of my professional work</p>
            </div><!-- /span12 -->

              <!-- Here we output the portfolio images -->
            <div class="portfolio-items">
              <div class="row-fluid">
                <?php while(has_sub_field('portfolio_images')): // Output Portfolio Images ?> 
                <div class="portfolio-item span4">
                  <img src="<?php if(get_sub_field('portfolio_image')) { ?><?php the_sub_field('portfolio_image'); ?><?php } else { echo theme_images() . 'portfolio-default.png'; } ?>" />                 
                </div> <!-- /portfolio-item -->
                <?php endwhile; ?>
                

            </div> <!-- /row-fluid -->
          </div> <!-- /portfolio-items -->
          </div> <!-- /row-fluid -->
        </section> <!-- /portfolio container-fluid -->
      
        <section class="about-me">
          <div class="container-fluid about-wrapper">
              <div class="row-fluid inner-container">
                <div class="span6">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_content(); ?></p>
                  <div class="social inline"><?php the_field('social_media'); ?></div>
                </div> <!-- /span6 -->

                 <div class="span6 profile">
                  <img src="<?php the_field('profile_image'); ?>" width="350" height="350" class="profile-img" />
                </div>

             
              </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->
      </section><!-- /about-me -->

    
       <section class="testimonials">
          <div class="container-fluid">
            <div class="inner-container">
              <div class="row-fluid">
                <div class="span12 center-text">
                  <h2>Testimonials</h2>
                </div> <!-- /span12 center-text -->
                </div> <!-- /row-fluid -->
                <div class="row-fluid">
                <div class="testimonials-carousel carousel slide">
  
                    <div class="carousel-inner">
                  <?php $count = 3; ?>
                
                  <?php while(has_sub_field('testimonials')): ?> 
               
                    <?php if($count === 3) { echo '<div class="item row-fluid">'; } ?>
                  <!-- Carousel items -->      

                    <div class="span6"><blockquote class="clearfix">
                    <?php the_sub_field('testimonial_content'); ?>
                  </blockquote>

                  <span class="client">
                    <strong><?php the_sub_field('testimonial_client'); ?></strong><br />
                    <a href="#"><?php the_sub_field('testimonial_link'); ?></a>
                  </span> <!-- /client -->
                  </div> <!-- /span6 -->

                  <?php if($count % 2 === 0) { echo '</div><div class="item row-fluid">'; } $count++;  ?> 
                  
                  <?php endwhile; ?>
                  
                  </div> <!-- /carousel-inner -->
                  </div> <!-- /featured-carousel -->          
              </div> <!-- /row-fluid -->
            </div> <!-- /inner-container -->
        </div> <!-- /container-fluid -->
    
    </section><!-- /testimonials -->

        <section id="get-in-touch" class="contact">
           <div class="contact-inner container-fluid map-frame">
              <div class="row-fluid inner-container">
              <div class="span12 main-title">
               <h2>Get in touch</h2>
             </div> <!-- /span12 center-text -->
        
               <div class="row-fluid">
                <div class="contact-form span8">
                  <div class="form-inner">
<?php
  $email_address = "aasananes@gmail.com";
if($_POST[sent]){
 $error = "";
 if(!trim($_POST[your_name])){
 $error .= "<p>Please enter your name</p>";
 }
 if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
 $error .= "<p>Please enter a valid email address</p>";
 }
 if(!trim($_POST[your_message])){
 $error .= "<p>Please enter a message</p>";
 }
 if(!trim($_POST[your_subject])){
 $error .= "<p>Please enter a message</p>";
 }
 if(!$error){
 $email = wp_mail($email_address,trim($_POST[your_name])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[your_message])),"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email],"Phone: ".trim($_POST[your_phone])));
 }
}
?>

 <?php if($email){ ?>
 <p><strong>Message succesfully sent. I'll reply as soon as I can</strong></p>
 <?php } else { if($error) { ?>
 <p><strong>Your messange hasn't been sent</strong><p>
 <?php echo $error; ?>
 <?php } else {  } ?>
 <form action="<?php the_permalink(); ?>" id="contact_me" method="post">
 <input type="hidden" name="sent" id="sent" value="1" />
 <div id="form">
  <div class="input-prepend">
 <label>Your Name <span class="required">*</span></label>
 <div id="input-field"><input type="text" name="your_name" id="your_name" value="<?php echo $_POST[your_name];?>" /></div>
</div>
 <div class="input-append">
  <label>Your Email <span class="required">*</span></label>

 <div id="input-field"><input type="text" name="your_email" id="your_email" value="<?php echo $_POST[your_email];?>" /></div>
 </div>
  <div class="input-prepend">
  <label>Phone</label>

 <div id="input-field"><input type="text" name="your_phone" id="your_phone" value="<?php echo $_POST[your_email];?>" /></div>
 </div>
 <div class="input-append">
  <label>Subject</label>
 <div id="input-field"><input type="text" name="your_subject" id="your_subject" value="<?php echo $_POST[your_subject];?>" /></div>
</div>
 <label>Your Message <span class="required">*</span></label>
 <div id="input-field"><textarea name="your_message" id="your_message"><?php echo stripslashes($_POST[your_message]); ?></textarea></div>
 <label> </label>
 <div id="input-field"><button type="submit" name="send" class="btn btn-success btn-large">Talk to me today!</button></div>

 
 </form>
 <?php } ?>
                      </div> <!-- /form-inner -->
            
                    </div> <!-- /get-in-touch -->
          

             
              </div> <!-- /row-fluid -->

        </div> <!-- /container-fluid -->
      </div><!-- /contact-inner -->
      </section><!-- /contact -->

       
      <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
