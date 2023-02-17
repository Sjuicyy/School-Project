function initMap() {
    // Latitude and Longitude
    var myLatLng = {lat: 27.665469, lng: 85.324517};
    var map = new google.maps.Map(document.getElementById('google-maps'), {
        zoom: 17,
        center: myLatLng
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Kathmandu, Nep' // Title Location
    });
}
