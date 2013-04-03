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
<div class="container">
<header class="header">
<h1 class="logo">
  <a href="<?php bloginfo('home'); ?>">CmSHeroes</a>
</h1>
<span class="slogan">
  The network of proven developers
  </span>
   <div class="mini-contact offset5">
                    <a href="mailto:info@cmshero.es">info@cmshero.es</a> <span class="phone">+1 09 08 8123</span>
                  </div>
</header>
<div class="clearfix"></div>
<section id="platforms">
 <div class="row-fluid">
  <a href="<?php bloginfo('home'); ?>/magento/" class="platform-box span4">
   
      <img src="<?php theme_images(); ?>magento-heroes.png" />
      <h2>Magento Hereoes</h2>


</a>
  <a href="<?php bloginfo('home'); ?>/ux/" class="platform-box span4">

      <img src="<?php theme_images(); ?>ux-heroes.png" />
      <h2>UX/UI Hereoes</h2>

  
</a>
  <a href="<?php bloginfo('home'); ?>/frontend/" class="platform-box span4">

      <img src="<?php theme_images(); ?>frontend-heroes.png" />
      <h2>Frontend Hereoes</h2>

  
</a>
</div> <!-- /row-fluid -->
<div class="row-fluid">
  <a href="<?php bloginfo('home'); ?>/ux/" class="platform-box span4">

      <img src="<?php theme_images(); ?>drupal-heroes.png" />
      <h2>Drupal Hereoes</h2>


</a>
  <a href="<?php bloginfo('home'); ?>/wordpress/" class="platform-box span4">

      <img src="<?php theme_images(); ?>wordpress-heroes.png" />
      <h2>WordPress Hereoes</h2>

  
</a>
  <a href="<?php bloginfo('home'); ?>/android/" class="platform-box span4">

      <img src="<?php theme_images(); ?>android-heroes.png" />
      <h2>Android Hereoes</h2>

  
</a>
</div> <!-- /row-fluid -->
  </section>
</div> <!-- /container -->
</div> <!-- /wrapper -->

<div id="footer">
  <div class="container">
  <p class="copyright">Copyright 2013. All Rights Reserved.</p>
  <div class="follow">
    <div class="twitter-follow"><a href="https://twitter.com/CmsHeroes" class="twitter-follow-button" data-show-count="false">Follow @CmsHeroes</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=444979425585208";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/CmSHeroes" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="lucida grande"></div>
  <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="http://www.linkedin.com/company/2750238?goback=%2Efcs_GLHD_cmsheroes_false_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;trk=ncsrch_hits" data-counter="right"></script>
  </div>
</div> <!-- /container -->
</div> <!-- /footer -->
 <?php wp_footer(); ?>
  <?php if($data['google_analytics']) { echo $data['google_analytics']; } ?>

<!--
                              ...                         
                            ?7777I7                         
                         =8OO$I8D8Z.                        
                         8DDDI~:=+I                         
                         8+D+=?ZIZ+                         
                        7DO?+~~+~Z                          
                        7D??=~I=7Z                          
                        .?~=I+~=Z                           
                      .=I=:~+$,,.                           
                    .+I7+==+?$+,.                           
                 .=?=??7+?=???++~7.                         
                .II+~I+O7I$,=+~.77$,                        
                $Z$?=::~~~7+  .,~Z+:.                       
              .+ZO7$Z$II?=?$.....O??:      =+I              
             :I?$7+O$8$:$$7I,.,,,+OI?    ,+??++             
           .+O7?::I8Z?+:8+$I::~~~~ZIO=~  ~7?=+,             
           ?Z$?=~7$8I?I7$7D~,,,::=OO?II:?I7I=.              
          :?~~=?$ZOZ?I?O7Z::..~~~=7O$O~~=?7.                
           ~I====?Z$$I$ZZ~::..  ,=7Z+==777                  
            .?I=~~+I++7ZO,   ..::=+I=77$+.                  
               ?I+=~=I?77,+Z$87OI$$ZI$+                     
                .,ZI~++?I8OM8+ZDND$7D            ..         
                  ??Z?+=+?=DOZZZO8OIZ:.                     
                  =+IOI+++=O88ODZOND88=                     
                  $?7I8OOIDZDZDDZ8N88OI                     
                  I?:=O~DO8Z8$8DODDDDDO=                    
                  7?I+8=DO8$8$DNOD8DNOD7.                   
                  ?+?+O78N8ZOZZNZDDNN8NZ.                   
                  I$?:DOZDZD$DZNODMMMNO$~                   
                  ?$8NO8Z8$D$DZNMMNMNM8ZI.                  
                  ,.  .O$OZ8$DDDMMMMNN8Z7.                  
                      ,8$ZD$Z8NNINNM8NDOZ.                  
                     .?Z8ZD$D8D: ,MMDM8ZO=                  
                     :DODZNZ8D$  .7M8MNODI                  
                    .IZ8NODZ8O   .:NDNM8NZ.                 
                    .8$D$8ODO,   .:IDNMOD7:                 
                   =$OOZONZ8,     .$N8NONZ:.                
                  .OZDNDNZO,      .8MNNDZO,:                
                  :DZNODZI.      .:DDNODZI.                 
                 .O8ZO8DZ,      .:7D8NODZ:                  
                 IDONDND:       .~$8ON88Z:                  
                .ODNDD$+        .:8DNNND7.                  
               .?888ZD8.         ~ZDO8ND+.                  
               :DOOD8$:.         $8DDDNNZ.                  
              .8DO88D$:          ZDDDDDD7                   
              .ODNNDN?.          :DNNNNN,                   
              .ODMNNZ,           ,DNNNN8:                   
             .$DDNMN?.           ZDNDDDD:..                 
             .$OMMNN~            ~DD78NNZ$ZO$:.             
             .7ONN88$:,          IO88NDDOZ8ZZOZ.            
             .$D8$ZZZ7,          ?DZ$$NDZZZZ$$O.            
              7DD8ZZOD?.             ...,=77:..:~ZZ         
               77OD88ZO.                                    
                .ZD88I.. 

                    Like a glooove!        

-->
</body>
</html>
