$( document ).ready(function() {

    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();

    //MODIFICATION POUR QUE CA PASSE SOUS CHROME
    directionsDisplay = new google.maps.DirectionsRenderer();

    function initialize() {
        //directionsDisplay = new google.maps.DirectionsRenderer();

        var mapOptions = {
            zoom: 15,
            center: new google.maps.LatLng(48.837731, 2.243580)
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('directions-panel'));

        var control = document.getElementById('control');
        control.style.display = 'block';
        map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);
    }

    function calcRoute() {
        // Champ qui permet de rentrer le lieu de dÃ©part
        var start = "30 avenue du docteur calmette 92140 clamart";
        // Champ qui permet d'entrer le lieu d'arrivÃ©
        var end = "48.837279, 2.242078";
        var request = {
            origin: start,
            destination: end,
            travelMode: google.maps.TravelMode.DRIVING

        };
        console.log(directionsDisplay);
        directionsService.route(request, function(response, status) {

            if (status == google.maps.DirectionsStatus.OK) {

                directionsDisplay.setDirections(response);

            }
        });
    }



    google.maps.event.addDomListener(window, 'load', initialize);
    calcRoute();

  /*

    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    var map;
    function initialize() {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var chicago = new google.maps.LatLng(41.850033, -87.6500523);
        var mapOptions = {
            zoom:7,
            center: chicago
        };
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        directionsDisplay.setMap(map);
    }
    function calcRoute() {
        var start = "Paris";
        var end = "Marseille";
        var request = {
            origin:start,
            destination:end,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function(response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
    */
});
