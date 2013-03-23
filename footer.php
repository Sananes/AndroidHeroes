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
</body>
</html>
