var slider2 = $('#slider2');
//almacenar botones
var siguiente2 = $('#btn-next2');
var anterior2 = $('#btn-prev2');

//mover ultima imagen al primer lugar
$('#slider2 section:last').insertBefore('#slider2 section:first');
//mostrar la primera imagen con un margen de -100%
slider2.css('margin-left', '-'+100+'%');

function moverD() {
	slider2.animate({
		marginLeft:'-'+200+'%'
	} ,700, function(){
		$('#slider2 section:first').insertAfter('#slider2 section:last');
		slider2.css('margin-left', '-'+100+'%');
	});
}

function moverI() {
	slider2.animate({
		marginLeft:0
	} ,700, function(){
		$('#slider2 section:last').insertBefore('#slider2 section:first');
		slider2.css('margin-left', '-'+100+'%');
	});
}

function autoplay() {
	interval = setInterval(function(){
		moverD();
	}, 5000);
}
siguiente2.on('click',function() {
	moverD();
	clearInterval(interval);
	autoplay();
});

anterior2.on('click',function() {
	moverI();
	clearInterval(interval);
	autoplay();
});

autoplay();