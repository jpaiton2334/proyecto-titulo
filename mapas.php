<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    #map{
  height:25em;
}
    </style>
</head>
<body>
<section id="map"></section>


<script>
const getLocations = () => {
    fetch('https://www.datos.gov.co/resource/g373-n3yy.json')
    .then(response => response.json())
    .then(locations => {
        let locationsInfo = []
        
        locations.forEach(location => {
            let locationData = {
                position:{lat:location.punto.coordinates[1],lng:location.punto.coordinates[0]},
                name:location.nombre_sede                
            }
            locationsInfo.push(locationData)
        })
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition((data)=>{
                let currentPosition = {
                    lat: data.coords.latitude,
                    lng: data.coords.longitude
                }
                dibujarMapa(currentPosition, locationsInfo)
            })
        }
    })
}

const dibujarMapa = (obj, locationsInfo) => {
   let map = new google.maps.Map(document.getElementById('map'),{
        zoom: 15,
        center: obj
    })

    let marker = new google.maps.Marker({
        position: obj,
        title: 'Tu ubicacion'
    })
    marker.setMap(map)

    let markers = locationsInfo.map(place => {
        return new google.maps.Marker({
            position: place.position,
            map: map,
            title: place.name
        })
    })
}
window.addEventListener('load',getLocations)
</script>

<script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBFm0vQN0-sQxUXYcWEp2_sKqm3W_7HKEY"> </script>
</body>
</html>