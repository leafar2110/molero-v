<section class="service container">
	<div class="row">
		<div class="col-md-3">
			<div class="text-justify">
				<h2>¿QUIENES <strong>SOMOS?</strong></h2>
				<p><strong>Molerocar, S.L.</strong> es una empresa familiar que nace en Jerez de la Frontera
					(Cádiz), tras más de 30 años de experiencia en el sector de la chapa y la
					pintura, en talleres y concesionarios de marcas tan prestigiosas como
				Seat, Audi, Volkswagen, Ford, etc.</p>
				<p> <strong>D. Juan Carlos Molero Zayas</strong>  dio el primer paso y estableció los
					cimientos de la que hoy es nuestra/vuestra empresa. Todo empezó en el
					año 2004 cuando se inició la andadura empresarial en exclusividad al
					frente del taller oficial de Chapa y Pintura del Concesionario Opel, Skoda,
				Cadillac y Tata para la provincia de Cádiz. </p>

				<div class="leer-mas suscribirte">
					<p><strong>¡Puedes suscribirte a nuestra página!</strong></p>
					<a href="">¡SUSCRíBETE!</a></div>
				</div>
			</div>


			<div class="col-md-9">
				<h2 class="text-center"><strong>SERVICIOS</strong></h2>
				<div class="row">
					<?php $argsBanner = array( 'post_type' => 'servicio', 
						'showposts' => 12,  );  

						$Banners = new WP_Query($argsBanner); ?>   
						<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
							<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
							$url = wp_get_attachment_url( $post_thumbnail_id);?> 
							<div class="col-md-4">
								<div class="content-service">
									<div class="img-service">
										<img src="<?php echo $url; ?>" alt="" class="img-fluid">
									</div>
									<div class="text-service">
										<h3><strong><?php the_title(); ?></strong></h3>
										<div class="content-text-service">
											<p><?php the_excerpt(); ?></p>
										</div>
										<div class="leer-service">
											<a href="<?php the_permalink(); ?>"><p><strong>SERGUIR LEYENDO</strong></p></a>
										</div>
									</div>
								</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
				</div>


				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<hr>
						</div>
						<div class="col-md-6">
							<div class="form-style">
								<div class="text-contact">
									<h3>TU OPINION <strong>ES IMPORTANTE</strong></h3>
									<p>Dejanos tu comentario</p>
								</div>
								<form action="">
									<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
								</form>
							</div>
						</div>
						<div class="col-md-6">
							<div class="text-contact">
								<h3><strong>TESTIMONIOS</strong></h3>
								<p> Lo que nuestros clientes opinan</p>
							</div>
							<div class="">
								<div class="opinion">
									<?php $argsBanner = array( 'post_type' => 'testimonio', 
										'showposts' => 12,  );  

										$Banners = new WP_Query($argsBanner); ?>   
										<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
											<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
											$url = wp_get_attachment_url( $post_thumbnail_id);?> 
											<div class="text-center content-opinion">
												<div class="centrar-grid  text-opinion">
													<p><?php the_excerpt(); ?></p>
												</div>
												<h4 class="text-center"><strong><?php the_field( 'autor' ); ?></strong></h4>
												<p><?php the_field( 'profesion' ); ?></p>
											</div>
										<?php endwhile; endif; ?>
									</div>
								</div>
							</div>
							<div class="col-md-12 linea-s">
								<hr>
							</div>
						</div>

					</div>
				</div>
			</section>