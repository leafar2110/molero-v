<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>NAVEGACIÓN</h3>
					<p></p>
					
				</div>
				<div class="navegacion-f">
					<p><a href="">¿Quiénes somos?</a></p>
					<p><a href="">Presente</a></p>
					<p><a href="">Nuestros Clientes</a></p>
					<p><a href="">Equipo Humano</a></p>
					<p><a href="">Servicio</a></p>
					<p><a href="">Instalaciones</a></p>
					<p><a href="">Maquinarias de ultima Generacion</a></p>
					<p><a href="">Producto</a></p>
					<p><a href="">Software</a></p>
					<p><a href="">Nuestro Compromiso</a></p>
					<p><a href="">Contacto</a></p>

				</div>
			</div>
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>REDES SOCIALES</h3>
					<p></p>
				</div>
				<div>

					
				</div>
			</div>
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>POST RECIENTES</h3>
					<p></p>
				</div>
				<div>
					<ul>
						<li><a href=""> Post: 1</a></li>
						<li><a href=""> Post: 2</a></li>
						<li><a href=""> Post: 3</a></li>
						<li><a href=""> Post: 4</a></li>
						<li><a href=""> Post: 5</a></li>

					</ul>
				</div>
			</div>
			<div class="col-md-3 f-padding">
				<div class="separador-f">
					<h3>COMENTARIOS RECIENTES</h3>
					<p></p>
				</div>
				<div>
					<p><a href=""> Marcos Rodíguez dejó un comentario</a></p>
					<p><a href=""> Leonardo Mora dejó un comentario</a></p>
					<p><a href=""> Sofía Angola dejó un comentario</a></p>
					<p><a href=""> José López dejó un comentario</a></p>
					<p><a href=""> Carlos Morelo dejó un comentario</a></li>

					</div>
				</div>
			</div>
		</div>
		<div class="copy">
			<p class="container"><small>© Copyright 2018</small></p>
		</div>
	</footer>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/slick.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/wow.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.autoplay').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 4000,
				infinite: true,
				fade: true,
				cssEase: 'linear',
			});
			$('.opinion').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				fade: true,
				cssEase: 'linear',
			});
			$('.autoplay-2').slick({
				slidesToShow: 3,
				slidesToScroll: 1,
				dots: true,
			/*	autoplay: true,
			autoplaySpeed: 4000,*/
			infinite: true,
			responsive: [{
				breakpoint: 768,
				settings: {
					arrows: true,
					slidesToShow: 1,
				}
			}, {
				breakpoint: 480,
				settings: {
					arrows: true,
					slidesToShow: 1
				}
			}]
		});

		});

	</script>


	<?php wp_footer();?>
	<script>
		new WOW().init();
	</script>
</body>
</html>