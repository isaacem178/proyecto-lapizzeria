    let map;
    async function initMap() {
        let latlng = {
            lat: parseFloat(opciones.latitud),
            lng: parseFloat(opciones.longitud)
        }
        const { Map } = await google.maps.importLibrary("maps");
        map = new Map(document.getElementById("mapa"), {
            center: latlng, 
            zoom: parseInt(opciones.zoom),
        });

        let marker = new google.maps.Marker({
            position:latlng,
            map: map,
            title: 'La Pizzeria'
        });
    }
    initMap();

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

        // Ajustar Mapa
        let mapa = $('#mapa'); 

        if(mapa.length > 0){
            if($(document).width() >= breakpoint){
                ajustarMapa(0);
            }else {
                ajustarMapa(300);
            }
        }

        $(window).resize(function(){
            if($(document).width() >= breakpoint){
                ajustarMapa(0);
            }else {
                ajustarMapa(300);
            }
        });

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

    function ajustarMapa(altura){
        if(altura == 0 ){
            let ubicacionSection = $('.ubicacion-reservacion');
            let ubicacionAltura = ubicacionSection.height();
            $('#mapa').css({'height': ubicacionAltura});

        }else {
            $('#mapa').css({'height': altura});
        }
    }
