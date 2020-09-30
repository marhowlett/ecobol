<?php
    /* Template Name: Condiciones */ 
    get_header();
?>
<section id="servicios2" class="template-section">
       <div class="contenedor">
       <div class="ban">
           <h2 >CONDICIONES PAGO Y ENVÍO</h2>
           <p>En caso de requerir factura, los precios son más IVA (16%)</p>
       </div>
    </div>
</section>


   <section id="condiciones" class="template-section">
       <div class="contenedor">
       
        <div class="grid">
           <div class="col">
           <h3><img class="bolsa espe" src="<?php echo get_stylesheet_directory_uri(); ?>/img/metodo.png" alt="Logo">MÉTODOS DE PAGO</h3>
           <ul>
               <li>Depósito</li>
               <li>Transferencia Bancaria</li>
               <p><strong>Estimado cliente: </strong>Al realizar un deposito o transferencia, favor de enviarnos su comprobante vía mail para empezar con la logística de su pedido.</p>
           </ul>
          
           </div>
           <div class="col">
           <h3><img class="bolsa espe2" src="<?php echo get_stylesheet_directory_uri(); ?>/img/envios.png" alt="Logo">ENVÍOS</h3>
           <p>Todos los  costos de envío corren por cuenta del cliente.</p>
           <p><strong>Advertencia para el envío en el extranjero</strong>
En los pedidos internacionales pueden producirse impuestos, tasas o aranceles que no están incluidos en el precio total.</p>
          <div class="grid">
              <div class="col especial"><p class="negritas">Países a los que se envía</p></div>
              <div class="col especial"><?php echo do_shortcode('[caldera_form id="CF5edeb914629c8"]'); ?></div>
          </div>
          
           </div>
       </div>
    </div>
</section>
 
   


  <?php include("esbrillante2.php"); ?>
   
<?php 
    get_footer();
?>

