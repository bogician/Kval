$('.part1').mouseenter(f1).mouseleave(f2);


function f1 (){
		$('.description2').html($(this).attr('description-data'));
		$('.description2').delay(500).fadeIn(2);
	}

	function f2(){
		$('.description2').fadeOut(0);
	}// JavaScript Document