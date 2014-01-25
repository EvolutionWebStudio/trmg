// remap jQuery to $
(function($) {
})(window.jQuery);

/* trigger when page is ready */
$(document).ready(function() {
	

	jQuery('.newsletter-button').click(function() {
		jQuery('.newsletter-form').slideToggleWidth();
	});

	jQuery.fn.extend({
		slideRight : function() {
			return this.each(function() {
				jQuery(this).animate({
					width : 'show'
				});
			});
		},
		slideLeft : function() {
			return this.each(function() {
				jQuery(this).animate({
					width : 'hide'
				});
			});
		},
		slideToggleWidth : function() {
			return this.each(function() {
				var el = jQuery(this);
				if (el.css('display') == 'none') {
					el.slideRight();
				} else {
					el.slideLeft();
				}
			});
		}
	});

});

/* optional triggers

 $(window).load(function() {

 });

 $(window).resize(function() {

 });

 */

function embedCodeShow() {
	$('.popbox_fade').fadeIn(300, function() {
		$('.popbox_fade').css({
			"display" : "block"
		});
	});
	$('.embed_code_popbox').fadeIn(300, function() {
		$('.embed_code_popbox').css({
			"display" : "block"
		});
	});
}

function embedCodeHide() {
	$('.popbox_fade').fadeOut(200, function() {
		$('.popbox_fade').css({
			"display" : "none"
		});
	});
	$('.embed_code_popbox').fadeOut(200, function() {
		$('.embed_code_popbox').css({
			"display" : "none"
		});
	});
}

function embedCodeUpdate() {
	var outputTextarea = $('.embedding_code');

	if (embedCodeValidate()) {
		outputTextarea.removeClass('form_error');
		outputTextarea.text('');

		var layout = $('input:radio[name=layout]:checked').val();
		var dimensionX = $(".dimenzije_x").val();
		var dimensionY = $(".dimenzije_y").val();
		var color = $(".color_hex").val().slice(1);

		$.ajax({
			type : 'GET',
			url : '/api/web_camera/makeIframe.php',
			data : {
				width : dimensionX,
				height : dimensionY,
				layout : layout,
				color : color
			},
			success : function(data) {
				outputTextarea.text(data);
			},
			error : function() {
				outputTextarea.text('Došlo je do greške u komunikaciji sa srverom! Pokušajte ponovo.');
			}
		});
	} else {
		outputTextarea.text('Došlo je do greške! Ispravite obilježena polja pa pokušajte ponovo generisati kod.');
		outputTextarea.addClass('form_error');
	}
}

function embedCodeProportion(dimenzija) {
	var width = 1840;
	var height = 730;
	var proportion = 1840 / 730;
	var layout = $('input:radio[name=layout]:checked');

	if (layout.val() == "horizontal") {
		proportion = 1840 / 730;
	} else if (layout.val() == "vertical") {
		proportion = 920 / 1420;
	}

	if (dimenzija == 'y') {
		width = parseInt($(".dimenzije_y").val());
		height = proportion * width;
		$(".dimenzije_x").val(Math.round(height));
	} else if (dimenzija == 'x') {
		height = parseInt($(".dimenzije_x").val());
		width = (1 / proportion) * height;
		$(".dimenzije_y").val(Math.round(width));
	}

}

function embedCodeValidate() {
	var dimensionRegEx = /^\d*[0-9](|.\d*[0-9]|,\d*[0-9])?$/;
	var colorRegEx = /#([0-9A-Fa-f]{6})/;
	var error = 0;

	var dimensionX = $(".dimenzije_x");
	var dimensionY = $(".dimenzije_y");
	var color = $(".color_hex");

	if (!dimensionRegEx.test(dimensionX.val())) {
		dimensionX.addClass('form_error');
		error = 1;
	} else {
		dimensionX.removeClass('form_error');
	}
	if (!dimensionRegEx.test(dimensionY.val())) {
		dimensionY.addClass('form_error');
		error = 1;
	} else {
		dimensionY.removeClass('form_error');
	}
	if (!colorRegEx.test(color.val())) {
		color.addClass('form_error');
		error = 1;
	} else {
		color.removeClass('form_error');
	}
	if (error == 1) {
		return false;
	} else {
		return true;
	}

}

/**
 * Rezervacija widget
 */

$(".rezervacija-widget-button").click(function() {
	$(".rezervacija-widget-info").slideToggle("slow");
});

/**
 * Ponude na naslovnoj
 */
$('.jcarousel-item').mouseenter(function() {
	$(this).addClass('jcarousel-item-active');
	$('.jcarousel-item-active .jcarousel-item-text').stop().animate({
		height : '148'
	});
}).mouseleave(function() {
	$('.jcarousel-item-active .jcarousel-item-text').stop().animate({
		height : '36'
	});
	$(this).removeClass('jcarousel-item-active');
});
