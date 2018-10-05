	<div class="row">
		<?php $argsBanner = array( 'post_type' => 'equipo', 
			'showposts' => 12,  );  

			$Banners = new WP_Query($argsBanner); ?>   
			<?php if ($Banners->have_posts()) : while($Banners->have_posts() ) : $Banners->the_post(); ?>  
				<?php $post_thumbnail_id = get_post_thumbnail_id( $Banners->id );  
				$url = wp_get_attachment_url( $post_thumbnail_id);?> 
				<div class="col-md-6">
					<div class="content-person">
						<div class="content-img-person">
							<img src="<?php echo $url; ?>" alt="" class="img-fluid">
						</div>
						<div class="text-person">
							<h3><strong><?php the_field( 'autor' ); ?></strong></h3>
							<p><?php the_field( 'profesion' ); ?></p>
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
		</div>