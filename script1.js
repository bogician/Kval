
$('.part').mouseenter(f1).mouseleave(f2);


function f1 (){
		$('.description').html($(this).attr('description-data'));
		$('.description').delay(500).fadeIn(2);
	}

	function f2(){
		$('.description').fadeOut(0);
	}
