$(document).ready(function(){

})
//Google Map
function initMap() {

    var locations = [
      ['Yerevan', 40.1751581,44.4987111,13.75],
    ];


    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(40.1751581,44.4987111,13.75),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });


    var image = {
      url: 'images/map.png',

    scaledSize: new google.maps.Size(20, 40), // scaled size

    };

    for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map,
      icon: image 
    });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
}
//end google map