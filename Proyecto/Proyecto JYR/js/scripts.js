function iniciarMap(){
    var coord = {lat:18.5054221 ,lng: -69.8307036};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}