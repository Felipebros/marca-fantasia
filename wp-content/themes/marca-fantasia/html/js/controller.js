$(document).ready(function(){

    $(".subnav-item").on('click', function(){
    	$('.secondmenu').removeClass('esconder');
    	$('.secondmenu').addClass('translate');
    });
    $('.secondmenu').on('mouseleave', function(){
    	$(this).removeClass('translate');
    	$(this).addClass('esconder');
    })

});