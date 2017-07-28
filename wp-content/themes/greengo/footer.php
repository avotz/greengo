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
			<div class="footer-container">
				<div class="footer-social">
					<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
					<a href="#" class="tripadvisor"><img src="<?php echo get_template_directory_uri();  ?>/img/tripadvisor.png" alt="Pani Amor"></a>
					<a href="#" class="instagram"><img src="<?php echo get_template_directory_uri();  ?>/img/instagram.png" alt="Pani Amor"></a>
				</div>
				<div class="footer-partners">
					<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/img/codigodeconducta.png" alt="Codigo de conducta"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/img/paniamor.png" alt="Pani Amor"></a>
					<a href="#"><img src="<?php echo get_template_directory_uri();  ?>/img/carmonair.png" alt="carmonair"></a>
					<a href="#" class="luxury-air"><img src="<?php echo get_template_directory_uri();  ?>/img/luxury-air.png" alt="luxury air"></a>
				</div>
				<div class="copy">
					<div>Green Go Costa Rica &copy; <?php echo (date('Y') == 2017) ? date('Y') : '2017-'.date('Y'); ?> <i class="icon-avotz"></i></div>
					<a href="mailto:info@greengocostarica.com">info@greengocostarica.com</a>
				</div>
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
