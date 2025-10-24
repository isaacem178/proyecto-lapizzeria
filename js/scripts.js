let $ = jQuery.noConflict();

// Ocultar y mostrar menú
$(document).ready(function(){
    $('.mobile-menu a').on('click', function(){
        $('nav.menu-sitio').toggle('slow');
    });

    // Reaccionar al resize en la pantalla
    let breakpoint = 768;
    $(window).resize(function(){
        ajustarCajas();
        if($(document).width() >= breakpoint){
            $('nav.menu-sitio').show();
        }else{
           $('nav.menu-sitio').hide();
        }
    });
    // Ajustar cajas segun tamaño de imagen
    
    // let imagenes = $('.imagen-caja');
    // console.log(imagenes);
    
    ajustarCajas();

    // Fluidbox
   jQuery('.gallery a').each(function(){
        jQuery(this).attr({'data-fluidbox' : ''});
    });

    if(jQuery('[data-fluidbox]').length > 0){
        jQuery('[data-fluidbox]').fluidbox();
    }
});


function ajustarCajas(){
    let imagenes = $('.imagen-caja');
    if(imagenes.length > 0){
        let altura = imagenes[0].height;
        let cajas = $('contenido-caja');
        $(cajas).each(function(i, elemento){
            $(elemento).css({'height' : altura +'px'});
        });
    }
}
