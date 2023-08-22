<?php
/**
 * The template for displaying the footer
 *
 */
?>
<?php if ( woodmart_needs_footer() ): ?>
	<?php if ( ! woodmart_is_woo_ajax() ): ?>
		</div><!-- .main-page-wrapper --> 
	<?php endif ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
	<?php
		$page_id = woodmart_page_ID();
		$disable_prefooter = get_post_meta( $page_id, '_woodmart_prefooter_off', true );
		$disable_footer_page = get_post_meta( $page_id, '_woodmart_footer_off', true );
		$disable_copyrights_page = get_post_meta( $page_id, '_woodmart_copyrights_off', true );
	?>
	<?php if ( ! $disable_prefooter && woodmart_get_opt( 'prefooter_area' ) ): ?>
		<div class="woodmart-prefooter">
			<div class="container">
				<?php echo do_shortcode( woodmart_get_opt( 'prefooter_area' ) ); ?>
			</div>
		</div>
	<?php endif ?>
	
	<!-- FOOTER -->
	<footer >
     <?php include("esbrillante2.php"); ?>
     <section id="contacto" class="template-section tiendafooter">

<div class="contenedor">
   
<h2>
<span>¡CONTÁCTANOS!</span></h2>
    
    <div class="grid">
        <div class="col espe"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto.png" alt="Logo"></div>
        <div class="col"><p>En Ecobol nos esforzamos por ofrecerle bolsas y cajas de altísima calidad, para empacar su producto, sin perjudicar el medio ambiente.</p></div>
    </div>
     
           <div class="grid">
               <div class="col"><?php echo do_shortcode('[wpforms id="177" title="false"]'); ?></div>
               
<div class="col datos">
       
     
       <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/clock.png" alt="Logo">  L - V 8:00 a 18:00 hrs</p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/phone.png" alt="Logo"> (777) 100 1505<span>
(777) 244 7159</span><span>
EXT. 101</span>
</p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/WA.png" alt="Logo">  <a href="https://wa.me/7771140441">(777) 114 0441</a></p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/location.png" alt="Logo"><b class="especial"> Felipe Neri #9</b> <span>
Col. Emiliano Zapata</span><span>
Cuernavaca, Morelos</span></p>
        
        </div>
        <div class="datos">
       <p class="bl2"> <img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" alt="Logo">  <a href="mailto:contacto@ecobol.com.mx">contacto@ecobol.com.mx</a></p>
        
        </div>
        
     
       <p class="negrita">SÍGUENOS EN:</p>
       <p><a href="https://web.facebook.com/ventas.bolsas.5?_rdc=1&_rdr"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fb.png" alt="Logo">  </a><a href="#"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ig.png" alt="Logo">  </a><a href="#"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/yt.png" alt="Logo">  </a><a href="https://pin.it/4KXvPse"><img class="so" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pt.png" alt="Logo">  </a></p>
       
     </div>
           </div>
</div>
</section>
</footer>
<?php endif ?>
</div> <!-- end wrapper -->
<div class="woodmart-close-side"></div>
<?php wp_footer(); ?>
</body>
</html>