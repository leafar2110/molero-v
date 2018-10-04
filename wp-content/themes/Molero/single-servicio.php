<?php  get_header(); ?>

<!-- ***********************SECTION HOME*************************** -->
<?php  get_template_part('partials/portada'); ?>
<!-- ***********************END SECTION HOME*************************** -->
<?php if ( have_posts() ) : the_post(); ?>
	<section><!-- single-post-destacados -->
		<div class="col-md-4">
			<div class="">
				<div class="img-service">
					<img src="<?php the_post_thumbnail_url('medium');?>" alt="" class="img-fluid" >
				</div>
				<div class="">
					<h3><strong><?php the_title(); ?></strong></h3>
					<div class="">
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>
			</div>
		</div>


		<?php else : ?>
			<p><?php _e('Ups!, esta entrada no existe.'); ?></p>
		<?php endif; ?>


		<?php  get_footer(); ?>