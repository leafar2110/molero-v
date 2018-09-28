// ****************************boton-up**************************

function icono(){
	document.getElementById("icono-up").classList.toggle ("fa-angle-down");
}
document.getElementById("icono-down").onclick = function(){
	icono();
}
$(window).resize(function(){

	if ($(window).width() <= 767) {  
		$('.slider-nav').addClass('slider-nav-2');

	}     

});
$(document).ready(function() {
	$('.icono-down-soli').on('click', function() {
		$('.icono-down-soli').toggleClass('fa-angle-down');

	});
});
// **************************** end boton-up**************************
// **************************** OFF_CANVAS**************************
$(document).ready(function() {
	$('.button').on('click', function() {
		$('.content').toggleClass('isOpen');

	});
});
$(document).ready(function() {
	$('.off-canvas').on('click', function() {
		$('.content').toggleClass('isOpen');
		$('#button').removeClass('product-b');

	});
});
$(document).ready(function() {
	$('.titulo-canvas').on('click', function() {
		$('.content').toggleClass('isOpen');

	});
});
$(document).ready(function() {
	$('.titulo-canvas').on('click', function() {
		$('#button').toggleClass('button-2');

	});
});
$(document).ready(function() {
	$('#button').on('click', function() {
		$('#button').toggleClass('button-2');

	});
});
$(document).ready(function() {
	$('.off-canvas').on('click', function() {
		$('#button').toggleClass('button-2');

	});
});
// **************************** END OFF_CANVAS**************************
// **************************** PANAL**************************

/*$(window).ready('scroll', function () {
	if ($(window).scrollTop() > 100) {
		$('.panal').addClass('panal-2');
		$('.section-panal').addClass('section-panal-2');
	} else {
		$('.panal').removeClass('panal-2');
		$('.section-panal').removeClass('section-panal-2');
	}
});
*/


$(document).ready(function() {
	$('.panal').on('click', function() {
		$('.panal').addClass('panal-2');

	});
});
$(document).ready(function() {
	$('.figure').on('click', function() {
		$('#panal-a').addClass('panal-b');

	});
});
$(document).ready(function() {
	$('.product-c').on('click', function() {
		$('#button').addClass('product-b');

	});
});
$(document).ready(function() {
	$('.section-panal').on('click', function() {
		$('.section-panal').addClass('section-panal-2');

	});
});
$(document).ready(function() {
	$('.off-canvas').on('click', function() {
		$('.panal').removeClass('panal-2');


	});
});
$(document).ready(function() {
	$('.off-canvas').on('click', function() {
		$('.section-panal').removeClass('section-panal-2');

	});
});
$(document).ready(function() {
	$('.panal').on('click', function() {
		$('.titulo-canvas').addClass('titulo-none');

	});
});

$(document).ready(function() {
	$('.off-canvas').on('click', function() {
		$('.titulo-canvas').removeClass('titulo-none');

	});
});


// function canvas(){
// 		document.getElementById("button").classList.toggle ("button-2");
// 	}
// 	document.getElementById("button").onclick = function(){
// 		canvas();
// 	}


	// **************************** OFF_CANVAS**************************


	