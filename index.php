<?php
/**
 * The main template file.
 *
 * This theme is purely for the purpose of testing theme options in Options Framework plugin.
 *
 * @package WordPress
 * @subpackage AndroidHereos
 * @author Aaron Sananes
 */

get_header();


?>
  <?php while ( have_posts() ) : the_post(); ?>

      <header class="main-top">
        <div class="container-fluid">
          <div class="inner-container">
              <h1 class="logo <?php if('android' == get_post_type()) { echo 'android'; } elseif('ux' == get_post_type()) { echo 'ui'; } elseif('magento' == get_post_type()) { echo 'magento'; } elseif('drupal' == get_post_type()) { echo 'drupal'; } elseif('joomla' == get_post_type()) { echo'joomla'; } else { echo ''; } ?>"><a href="<?php bloginfo('home'); ?>">
                Android Heroes
              </a>
              </h1>
              <?php if(the_field('sub_title')) { ?><p class="subleader"><?php the_sub_field('sub_title'); ?></p><?php } ?>
              <div class="clearfix"></div>
              <div class="row-fluid">

                <?php if('android' == get_post_type()) { ?>

                <div class="intro slide-intro span6">
                  <h2><?php the_field('intro_title'); ?></h2>
                  <p><?php the_field('intro_description'); ?></p>
                  <a href="#about" class="btn btn-success btn-large get-in-touch"><span>Get in touch</a>
                </div> <!-- /intro -->

               <div class="android-slider hidden-phone span9 offset6">
                  <?php if(get_field('intro_image')) : ?><img src="<?php the_field('intro_image'); ?>" /><?php else: ?><img src="<?php theme_images(); ?>android-phone.png" /><?php endif; ?>

                </div> <!-- /android-slider -->
           
                <?php } else { ?>      

                <div class="intro slide-intro span6">
                  <h2><?php the_field('intro_title'); ?></h2>
                 
                  <div class="tags">
                     <?php while(has_sub_field('skillsets')): ?> 
                    <span><?php the_sub_field('skillset'); ?></span>
                     <?php endwhile; ?>
                  </div>
            
                  <p><?php the_field('intro_description'); ?> </p>
                  <a href="#about" class="btn btn-success btn-large get-in-touch"><span>Get in touch</a>
                  <div class="mini-contact">
                    <a href="mailto:info@cmshero.es">info@cmshero.es</a> <span class="phone">+1 098 998 001</span>
                  </div>
                </div> <!-- /intro -->

                <div class="span6 profile">
                  <img src="<?php the_field('profile_image'); ?>" width="350" height="350" class="profile-img" />
                </div> <!-- /browser-slider -->
                <?php } ?>
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


                 <?php if('android' == get_post_type()) { // show normal browser slider ?>
                   <div class="feat-image-work android " >
                 
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
                  <?php } else { // show android slider ?>
                   <div class="feat-image-work browser " >
                 
                  <img class="project-image" src="<?php theme_images(); ?>default-browser-project.png" />
                   

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

                  <?php } ?>
                 
                <div class="<?php if('magento' == get_post_type()) { echo 'span5'; } else { echo 'span7';} ?> details"><h2><?php the_sub_field('project_title'); ?></h2>
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
              <h2><?php echo $data['portfolio_title']; ?></h2>
              <p class="lead"><?php echo $data['portfolio_subtitle']; ?></p>
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
      
        <section id="about" class="about-me">
          <div class="container-fluid about-wrapper">
              <div class="row-fluid inner-container">
                <div class="span6">
                  <h2><?php the_title(); ?></h2>
                  <p><?php the_field('about_description'); ?></p>
                  <div class="social inline"><?php the_field('social_media'); ?></div>
                
                  <div class="mini-contact">
                    <a href="mailto:info@cmshero.es">info@cmshero.es</a> <span class="phone">+1 098 998 001</span>
                  </div>

                </div> <!-- /span6 -->

                 <div class="span6 profile">
                  <img src="<?php the_field('profile_image'); ?>" width="350" height="350" class="profile-img" />
                </div>

                <div class="row-fluid">
                  <div class="contact-form span12">
                    <div class="form-inner">
                      <?php include(TEMPLATEPATH . '/lib/includes/contact.form.php'); ?>
                      </div> <!-- /form-inner -->
            
                    </div> <!-- /get-in-touch -->
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


       
                
                <div class="company-information">
                  <div class="inner">
                  <h2>Get to know us</h2>
                  <?php if($data['address']) { ?>
                  <p class="address">
                    <!-- 4th Floor, Star House
                    15-17 Union Square
                    San Francisco, California
                    United States -->
                    <?php echo $data['address']; ?>
                  </p>
                  <?php } ?>
                  <?php if($data['phone_number']) { ?>
                  <p class="phone-number"><strong>Call:</strong> <?php echo $data['phone_number']; ?></p>
                  <?php } ?>
                  <?php if($data['email_address']) { ?>
                  <p class="email-address"><strong>Email:</strong> <a href="mailto:<?php $data['email_address']; ?>"><?php echo $data['email_address']; ?></a></p>
                  <?php } ?>
                  <?php if($data['twitter_link']) { ?>
                  <p class="follow"><strong>Follow:</strong> <a href="<?php echo $data['twitter_link']; ?>"><?php echo $data['twitter_username']; ?></a></p>
                  <?php } ?>

                  <?php if($data['linkedin']) { ?>
                  <p class="linkedin"><strong>Company Profile:</strong> <a href="<?php echo $data['linkedin']; ?>">LinkedIn</a></p>
                  <?php } ?>

                  <?php if($data['tax']) { ?>
                  <p class="tax">
                    <?php echo $data['tax']; ?>
                    <!-- Evisua LTD
                    Vat number: GB987472263 
                    Company Number: 05997321
                    -->
                  </p>
                  <?php } ?>
                </div> <!-- /inner -->
              </div> <!-- /company-information -->
         
           <div id="map_canvas" class="map">     </div> <!-- /map-canvas -->
      </section><!-- /get-in-touch -->

       
      <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
