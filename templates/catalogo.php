<?php
    /* Template Name: Catálogo */ 
    get_header();
?>
<section id="servicios2" class="template-section">
<div class="contenedor">
<div class="ban">
<h2 >CATÁLOGO</h2>
</div>

</div>
</section>
<section id="cat" class="template-section">
    <div class="contenedor"><?php echo do_shortcode('[woodmart_products layout="carousel" spacing="20" slides_per_view="4" autoplay="no" hide_pagination_control="no" hide_prev_next_buttons="no" center_mode="no" wrap="no" sale_countdown="0" stock_progress_bar="0" highlighted_products="0" products_bordered_grid="0" lazy_loading="no" scroll_carousel_init="no"]'); ?></div>
</section>
<section id="contacto" class="template-section">

<div class="contenedor">
   
<h2>
<span>¡CONTÁCTANOS!</span></h2>
    
    <div class="grid">
        <div class="col espe"><img class="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/contacto.png" alt="Logo"></div>
        <div class="col"><p>En Ecobol nos esforzamos por ofrecerle bolsas y cajas de altísima calidad, para empacar su producto, sin perjudicar el medio ambiente.</p></div>
    </div>
     
           <div class="grid">
               <div class="col"><?php echo do_shortcode('[caldera_form id="CF5e14ef6d8486d"]'); ?></div>
               
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
<?php 
    get_footer();
?>


