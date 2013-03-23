<?php
/**
 * The main template file.
 *
 * This theme is purely for the purpose of testing theme options in Options Framework plugin.
 *
 * @package WordPress
 * @subpackage Options Framework Theme
 */

get_header(); ?>
  <?php while ( have_posts() ) : the_post(); ?>
      <div class="main-top">
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
                  <img src="<?php theme_images(); ?>android-phone.png" />
                </div> <!-- /android-slider -->
              </div> <!-- /row-fluid -->
          </div><!-- /inner-container -->
        </div> <!-- /containter-fluid -->
      </div> <!-- /main-top -->

        <?php 
         // or has_sub_field + the_sub_field
        $projects = get_field('projects');

        if($projects): ?>

                <?php while(has_sub_field('projects')): ?>
                <?php 
                      $img_position = get_sub_field('image_position');
                      $android = get_sub_field('android_color');
                ?>
          <div class="featured-work container-fluid <?php if($img_position == 'Left') { echo 'align-left'; } else { echo 'align-right'; } ?>">
              <div class="row-fluid inner-container ">



              
         
                  <div class="feat-image-work" >
                  <img src="<?php theme_images(); ?>android-phone-<?php if($android == 'white') { echo 'white'; } else { echo 'black'; } ?>.png" />
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

                    <?php if(the_sub_field('project_features')) { // Are there any features? ?>
                    <ul class="list-features">
                      <?php the_sub_field('project_features'); ?>
                    </ul> <!-- / list-item -->
                    <?php } ?>
                    <a class="btn btn-large btn-secondary" href="<?php the_sub_field('project_button_link'); ?>"><?php the_sub_field('project_button_text'); ?></a>
                </div><!-- /span6 -->
          
              </div> <!-- /row-fluid -->
          </div> <!-- /container-fluid -->
                 <?php endwhile; ?>
        <?php endif; ?>
      

   
        <div class="portfolio container-fluid">
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
        </div> <!-- /container-fluid -->
      
        <div class="about-me">
          <div class="container-fluid about-wrapper">
              <div class="row-fluid inner-container">
                <div class="span6">
                  <h2>About Me</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde. </p>
                  <div class="social inline"><a href="#dribble" class="dribbble">Dribbble</a>, <a href="#" class="twitter">Twitter</a>, <a href="#" class="github">GitHub</a>, <a class="linkedin" href="#">LinkedIn</a></div>
                </div> <!-- /span6 -->

                 <div class="span6 profile">
                  <img src="<?php theme_images(); ?>profile-default.png" width="350" height="350" class="profile-img" />
                </div>

             
              </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->
      </div><!-- /about-me -->

       <?php if(has_sub_field('testimonials')): // If there are testimonials show testimonials ?>
       <div class="testimonials">
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
      </div>
    </div><!-- /testimonials -->
  <?php endif; ?>
        <div id="get-in-touch" class="contact">
           <div class="contact-inner container-fluid map-frame">
              <div class="row-fluid inner-container">
              <div class="span12 main-title">
               <h2>Get in touch</h2>
             </div> <!-- /span12 center-text -->
        
               <div class="row-fluid">
                <div class="contact-form span8">
                  <div class="form-inner">
                    <form>
                      <div class="input-prepend">
                        <label>Full Name</label>
                        <input type="text" placeholder="Full Name" />
                      </div>
                      <div class="input-append">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email Address" />

                        </div>
                      <div class="input-prepend">
                        <label>Phone Number</label>
                        <input type="text" placeholder="Full Name" />
                      </div>
                      <div class="input-append">
                        <label>Help me out?</label>
                        <select>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>

                        </div>
                        <label>Your message</label>
                        <textarea rows="6"></textarea>
                          <div style="padding-top:15px"><button type="submit" class="btn btn-success btn-large">Talk to me today</button></div>
                       </form>
                      </div> <!-- /form-inner -->
                    </div> <!-- /contact-form -->
          

             
              </div> <!-- /row-fluid -->

        </div> <!-- /container-fluid -->
      </div><!-- /contact-inner -->
      </div><!-- /contact -->

       
      <?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
