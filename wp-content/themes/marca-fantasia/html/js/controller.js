$(document).ready(function(){

	// menu lateral preto
    $(".subnav-item").on('click', function(){
    	$('.secondmenu').removeClass('esconder');
    	$('.secondmenu').addClass('translate');
    });
    $('.secondmenu').on('mouseleave', function(){
    	$(this).removeClass('translate');
    	$(this).addClass('esconder');
    })

    //menu inline ul
    $(".navbar-item").on('click', function(){
    	$('.subnav').removeClass('esconder-total');
    	$('.subnav').addClass('translate');
    });
    $('.menu-principal').click(function(event){
     event.stopPropagation();
	});

});