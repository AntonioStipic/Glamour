var mymap = L.map("mapid").setView([45.492104, 18.101176], 16);


// let token = "pk.eyJ1IjoiYW50b25pb3N0aXBpYyIsImEiOiJjamxldHpqN2Qwbm8xM2ttdGpvMzhsaWk3In0.3G_8rxv1EZwrSaCdYYR8Jw";
let token = "";
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + token, {
    attribution: '<span class="mapData">Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a></span>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'your.mapbox.access.token'
}).addTo(mymap);

var marker = L.marker([45.492104, 18.101176]).addTo(mymap);