$('.part2').mouseenter(f1).mouseleave(f2);


function f1 (){
		$('.description3').html($(this).attr('description-data'));
		$('.description3').delay(500).fadeIn(2);
	}

	function f2(){
		$('.description3').fadeOut(0);
	}// JavaScript Document// JavaScript Document