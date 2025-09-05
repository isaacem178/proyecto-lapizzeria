let $ = jQuery.noConflict();

// Ocultar y mostrar menú
$(document).ready(function(){
    $('.mobile-menu a').on('click', function(){
        $('nav.menu-sitio').toggle('slow');
    });

    // Reaccionar al resize en la pantalla
    let breakpoint = 768;
    $(window).resize(function(){
        if($(document).width() >= breakpoint){
            $('nav.menu-sitio').show();
        }else{
           $('nav.menu-sitio').hide();
        }
    });
});
