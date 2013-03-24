<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Options Framework Theme
 */
?>

    <footer class="footer">

      <div class="container-fluid">
      	  <?php while ( have_posts() ) : the_post(); ?>
       <div class="social inline"><?php the_field('social_media'); ?></div>
       	<?php endwhile; ?>
      <p class="inline">&copy; Company 2013</p>
     </div> <!-- /container -->
    </footer> <!-- /footer -->
  </div> <!-- /wrapper -->

    <div style="width:100%; text-align:center; padding: 30px 0;">  <a href="#top" class="back-top">Back to Top</a></div>
  <?php wp_footer(); ?>

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

                              

-->

</body>
</html>
