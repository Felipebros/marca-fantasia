$(document).ready(function(){

	// menu lateral preto
    $(".subnav-item").on('click', function(){
    	$('.secondmenu').removeClass('esconder');
    	$('.secondmenu').addClass('translate');
    });

    // $('.secondmenu':not).on('mouseleave', function(){
    // 	$(this).removeClass('translate');
    // 	$(this).addClass('esconder');
    // });

    $('div:not(.secondmenu)').on('click', function(){
    $('.secondmenu').removeClass('translate');
    $('.secondmenu').addClass('esconder');
    });

    //menu inline ul
    $(".navbar-item").on('click', function(){
    	if($('.subnav').hasClass('esconder-total')){
    		$('.subnav').removeClass('esconder-total');
    		$('.subnav').addClass('translate');
    	}
    	else{
    		$('.subnav').removeClass('translate');
    		$('.subnav').addClass('esconder-total');
    	}
    });
    $('.menu-principal').click(function(event){
     event.stopPropagation();
	});

});