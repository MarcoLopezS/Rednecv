var jCoFo = jQuery.noConflict();

jCoFo(document).on("ready", function(){

    GoogleMap();

    jCoFo('.progressForm .fa').hide();

    jCoFo("#formContactoSubmit").on("click", function(e){

        e.preventDefault();

        var form = jCoFo("#contactForm");
        var url = form.attr('action');
        var data = form.serialize();

        jCoFo('.progressForm .fa').show();

        jCoFo.post(url, data, function(result){
            jCoFo('.progressForm .fa').hide();
            jCoFo(".contact-content").addClass('alert').addClass('alert-success').text(result.message);
            form[0].reset();
        }).fail(function(result){
            jCoFo('.progressForm .fa').hide();
            console.log(result);
            jCoFo(".contact-content").text("Se produjo un error al enviar el mensaje. Intentelo de nuevo más tarde.");

            if(result.status === 422){

                var errors = result.responseJSON;

                errorsHtml = '<div class="alert alert-danger"><ul>';
                jCoFo.each( errors, function( key, value ) {
                    errorsHtml += '<li>' + value[0] + '</li>';
                });
                errorsHtml += '</ul></di>';

                jCoFo('.contact-content').html(errorsHtml);

            };

        });

    });

});

/*==============================
    Google map
==============================*/
function GoogleMap() {
    if (jCoFo('#map').length) {
        // Option map
        var $map = jCoFo('#map'),
            mapZoom = $map.data('map-zoom'),
            lat = $map.data('map-latlng').split(',')[0],
            lng = $map.data('map-latlng').split(',')[1],
            marker = $map.data('map-marker'),
            width = parseInt($map.data('map-marker-size').split('*')[0]),
            height = parseInt($map.data('map-marker-size').split('*')[1]);

        // Map
        if (isMobile.any()) {
            var noDraggableMobile = false;
        } else {
            var noDraggableMobile = true;
        }
        var MY_MAPTYPE_ID = 'custom_style';
        var latlng = new google.maps.LatLng(lat, lng);
        var settings = {
            zoom: mapZoom,
            center: latlng,
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
            },
            mapTypeControl: false,
            mapTypeId: MY_MAPTYPE_ID,
            scrollwheel: false,
            draggable: noDraggableMobile,
        };

        var map = new google.maps.Map(document.getElementById("map"), settings);
        var styledMapOptions = {
            name: 'Custom Style'
        };
        var customMapType = new google.maps.StyledMapType(styledMapOptions);

        map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

        google.maps.event.addDomListener(window, "resize", function () {
            var center = map.getCenter();
            google.maps.event.trigger(map, "resize");
            map.setCenter(center);
        });
        var companyImage = new google.maps.MarkerImage(marker,
            new google.maps.Size(width, height),
            new google.maps.Point(0, 0)
        );
        var companyPos = new google.maps.LatLng(lat, lng);
        var companyMarker = new google.maps.Marker({
            position: companyPos,
            map: map,
            icon: companyImage,
            title: "Road",
            zIndex: 3
        });
    }
}

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
}