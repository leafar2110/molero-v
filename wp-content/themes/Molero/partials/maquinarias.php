<section class="maquinarias">
	<div class="container content-border">
		<div class="titulo-maqui text-center">
			<h4><strong>MAQUINARIAS DE ÚLTIMA GENERACIÓN</strong></h4>
		</div>

		<div class="row">
		<?php $argsBanner = array( 'post_type' => 'maquinarias', 
			'showposts' => 12,  );  

			$Banners = new WP_Query($argsBanner); ?>   
			<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
				<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
				$url = wp_get_attachment_url( $post_thumbnail_id);?> 
					<div class="col-md-4 separador-maqui">
						<div class="content-card-maqui">
							<div class="content-img-maqui">
								<img class="img-carrusel img-fluid" src="<?php echo $url; ?>" width="100%" alt="3"/>
							</div>
							<div class="content-text-maqui text-center">
								<h5><?php the_title(); ?></h5>
								<p><?php the_excerpt(); ?></p>

							</div>
						</div>
					</div>
			<?php endwhile; endif; ?>
		</div>
</section>