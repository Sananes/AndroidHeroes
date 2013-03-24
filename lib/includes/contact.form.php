                              <?php
                              if(isset($_POST['submitted'])) {
                                if(trim($_POST['contactName']) === '') {
                                  $nameError = 'Please enter your name.';
                                  $hasError = true;
                                } else {
                                  $name = trim($_POST['contactName']);
                                }
                                $emotional_state = trim($_POST['emotional_state']);
                                $phone_number = trim($_POST['phone_number']);
                                if(trim($_POST['email']) === '')  {
                                  $emailError = 'Please enter your email address.';
                                  $hasError = true;
                                } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
                                  $emailError = 'You entered an invalid email address.';
                                  $hasError = true;
                                } else {
                                  $email = trim($_POST['email']);
                                }

                                if(trim($_POST['your_message']) === '') {
                                  $commentError = 'Please enter a message.';
                                  $hasError = true;
                                } else {
                                  if(function_exists('stripslashes')) {
                                    $your_message = stripslashes(trim($_POST['your_message']));
                                  } else {
                                    $your_message = trim($_POST['your_message']);
                                  }
                                }

                                if(!isset($hasError)) {
                                  $emailTo = $data['email_address_contact'];
                                  $personalSubject = $data['email_subject'];
                                  $subject = $name. ' : ' .$emotional_state;
                                  $body = "Name: $name \n\n Emotional State: $emotional_state \n\nPhone Number: $phone_number \n\nEmail: $email \n\nMessage: $your_message";
                                  $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

                                  wp_mail($emailTo, $subject, $body, $headers);
                                  $emailSent = true;
                                }

                              } ?>
                              <?php if(isset($emailSent) && $emailSent == true) { ?>
                                      <div class="alert alert-success">
                                        Thanks, your email was sent successfully. We will get back to you as soon as possible!
                                      </div>
                                    <?php } elseif(isset($hasError) || isset($captchaError)) { ?>
                                        <p class="error">Sorry, an error occured.<p>

                             <?php } ?>
                              <form action="<?php the_permalink(); ?>#about" id="contact_me" method="post">

                               <div id="form" class="row-fluid">
                                <div class="input-prepend span6">
                               <label>Your Name <span class="required">*</span></label>
                               <div id="input-field">
                                <input type="text" name="contactName" id="contactName" value="<?php echo $_POST['contactName'];?>" />
                              </div>
                              <?php if($nameError != '') { ?>
                                 <span><?=$nameError;?></span>
                               <?php } ?>
                              </div><!-- / Full name -->
                               <div class="input-append span6">
                                <label>Your Email <span class="required">*</span></label>

                               <div id="input-field">
                                <input type="text" name="email" id="email" value="<?php echo $_POST['email'];?>" />
                              </div>
                              <?php if($emailError != '') { ?>
                                 <span><?=$emailError;?></span>
                               <?php } ?>
                               </div> <!-- / Email Address -->
                                <div class="input-prepend span6">
                                <label>Phone</label>
                               <div id="input-field">
                                <input type="text" name="phone_number" id="phone_number" value="<?php echo $_POST['phone_number'];?>" />
                               </div>
                               </div> <!-- /Phone number -->
                               <div class="input-append span6">
                                <label>Your emotional state</label>
                               <div id="input-field">
                                <select name="emotional_state" value="<?php echo $_POST['emotional_state'];?>">
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
                               <div id="input-field"><textarea name="your_message" id="your_message"></textarea></div>
                               </div>
                               <label> </label>
                               <div id="input-field"><button type="submit" name="submit" class="btn btn-success btn-large">Talk to me today!</button></div>
                              <input type="hidden" name="submitted" id="submitted" value="true" />
                                      
                              </form>

                           
                        
