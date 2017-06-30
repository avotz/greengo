<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greengo
 */

?>

	<footer class="footer">
		<div class="inner">
			<div class="footer-social">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-tripadvisor"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
			</div>
			<div class="copy">
				Green Go Costa Rica &copy; <?php echo date('Y'); ?>
			</div>
		</div>
	</footer>
<div id="tour-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
        
         <?php  echo do_shortcode('[contact-form-7 id="35" title="Inquire Tour"]') ;?>
              
        
    </div>
    <div id="accommodation-popup" class="request-popup white-popup mfp-hide mfp-with-anim">
        
         <?php  echo do_shortcode(' [contact-form-7 id="38" title="Inquire Accommodation"]') ;?>
              
        
    </div>
   
<?php wp_footer(); ?>

</body>
</html>
