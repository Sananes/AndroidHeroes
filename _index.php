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

      <div class="main-top">
        <div class="container-fluid">
          <div class="inner-container">
              <h1 class="logo">Android Heroes</h1>
              <div class="clearfix"></div>
              <div class="row-fluid">
                <div class="intro span6">
                  <h2>Super awesome android apps for everyone.</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                  <a href="#" class="btn btn-success btn-large get-in-touch"><span>Get in touch</a>
                </div> <!-- /intro -->
                <div class="android-slider hidden-phone span9 offset6">
                  <img src="<?php theme_images(); ?>android-phone.png" />
                </div> <!-- /android-slider -->
              </div> <!-- /row-fluid -->
          </div><!-- /inner-container -->
        </div> <!-- /containter-fluid -->
      </div> <!-- /main-top -->
        <div class="featured-work container-fluid">
            <div class="row-fluid inner-container">
              <div class="feat-image-work align-left">
                  <img src="<?php theme_images(); ?>android-phone-white.png" />
              </div>              
              <div class="span7 details"><h2>Super awesome marketing speak!</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  <ul class="list-features">
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                  </ul> <!-- / list-item -->
                  <a class="btn btn-large btn-secondary" href="#">View site</a>
              </div><!-- /span6 -->

            </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->

         <div class="featured-work secondary container-fluid">
            <div class="row-fluid inner-container">

              <div class="span7"><h2>Super awesome marketing speak!</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                  <ul class="list-features">
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                    <li>List item goes here</li>
                  </ul> <!-- / list-item -->
                  <a class="btn btn-large btn-secondary" href="#">View site</a>
              </div><!-- /span6 -->
              <div class="feat-image-work">
                <img src="<?php theme_images(); ?>android-phone-black.png" />
                  <div id="featured-carousel" class="featured-carousel carousel slide carousel-fade">
            
                    <!-- Carousel items -->
                    <div class="carousel-inner">
                      <div class="item active"><img src="<?php theme_images(); ?>iphone-image.png" /></div>
                      <div class="item"><img src="<?php theme_images(); ?>android-phone-black.png" /></div>
                      <!-- <div class="item"><img src="<?php bloginfo('template_directory'); ?>/assets/images/android-phone-white.png" width="268" height="200" /></div> -->
                    </div>
                    <!-- Carousel nav -->
                  </div>

              </div> <!-- /featured-work -->
            </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->

   
        <div class="portfolio container-fluid">
          <div class="row-fluid inner-container">
            <div class="span12 center-text">
              <h2>Super awesome marketing speak!</h2>
              <p class="lead">Here’s a look at some of my professional work</p>
            </div><!-- /span12 -->
            <div class="portfolio-items">
              <div class="row-fluid">
                <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio.png" />                  
                </div> <!-- /portfolio-item -->

                <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio2.png" />
                </div> <!-- /portfolio-item -->
                <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio3.png" />                  
                </div> <!-- /portfolio-item -->
              </div> <!-- /row-fluid -->
              <div class="row-fluid">
              <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio4.png" />                
              </div> <!-- /portfolio-item -->
              <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio5.png" />               
              </div> <!-- /portfolio-item -->
              <div class="portfolio-item span4">
                  <img src="<?php theme_images(); ?>portfolio6.png" />                
              </div> <!-- /portfolio-item -->

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
                  
                </div> <!-- /portfolio-item -->

             
              </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->
      </div><!-- /about-me -->


        <div class="contact">
         <div class="map-frame">
          <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=San+Francisco,+California&amp;aq=&amp;sll=53.723331,-1.349875&amp;sspn=0.063379,0.132694&amp;ie=UTF8&amp;geocode=FVJmQAIdKAe0-A&amp;split=0&amp;hq=&amp;hnear=San+Francisco,+California&amp;ll=37.77493,-122.419416&amp;spn=0.042332,0.098619&amp;t=m&amp;z=14&amp;output=embed"></iframe>      <div class="container-fluid contact-wrapper">
            <div class="contact-inner">
              <h2>Get in touch</h2>
               <div class="row-fluid inner-container">
                <div class="contact-form span6">
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
                          <button type="submit" class="btn btn-success">Talk to me today</button>
                      
                      </div>
                    </form>
                  </div>
                </div> <!-- /contact-form -->

             
              </div> <!-- /row-fluid -->
        </div> <!-- /container-fluid -->
      </div><!-- /contact-inner -->
      </div><!-- /map-frame -->
      </div><!-- /contact -->

      


<?php get_footer(); ?>
