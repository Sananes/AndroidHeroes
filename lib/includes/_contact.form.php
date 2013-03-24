                              <?php
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
                               $email = wp_mail(get_option("admin_email"),trim($_POST[your_name])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST[your_message])),"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
                               }
                              }
                              ?>
                              <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                             <?php if($email){ ?>
                             <p><strong>Message succesfully sent. I'll reply as soon as I can</strong></p>
                             <?php } else { if($error) { ?>
                             <p><strong>Your messange hasn't been sent</strong><p>
                             <?php echo $error; ?>
                             <?php } else {  } ?>
                              <form action="<?php the_permalink(); ?>#about" id="contact_me" method="post">
                               <input type="hidden" name="sent" id="sent" value="1" />
                               <div id="form" class="row-fluid">
                                <div class="input-prepend span6">
                               <label>Your Name <span class="required">*</span></label>
                               <div id="input-field"><input type="text" name="your_name" id="your_name" value="<?php echo $_POST[your_name];?>" /></div>
                              </div>
                               <div class="input-append span6">
                                <label>Your Email <span class="required">*</span></label>

                               <div id="input-field"><input type="text" name="your_email" id="your_email" value="<?php echo $_POST[your_email];?>" /></div>
                               </div>
                                <div class="input-prepend span6">
                                <label>Phone</label>

                               <div id="input-field"><input type="text" name="your_phone" id="your_phone" value="<?php echo $_POST[your_email];?>" /></div>
                               </div>
                               <div class="input-append span6">
                                <label>Your emotional state</label>
                               <div id="input-field">
                                <select name="emotional_state" value="<?php echo $_POST[emotional_state];?>">
                                    <option>Let it all out...</option>
                                    <option>Angry</option>
                                    <option >Fustrated</option>
                                    <option>Happy</option>
                                    <option>Worried</option>
                                    <option>Excited</option>
                                    <option>Confused</option>
                                </select>
                               </div>
                              </div>
                              <div class="span12 textarea-field">
                               <label>Your Message <span class="required">*</span></label>
                               <div id="input-field"><textarea name="your_message" id="your_message"><?php echo stripslashes($_POST[your_message]); ?></textarea></div>
                               </div>
                               <label> </label>
                               <div id="input-field"><button type="submit" name="submit" class="btn btn-success btn-large">Talk to me today!</button></div>
                              </form>

                         <?php } ?>

                       
