var mymap = L.map('mapid').setView([-7.7093349, 110.1173872], 14);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoidmluY2VudG1pY2hhZWwwODkiLCJhIjoiY2p5MTkyNnVkMGJoYzNoczdiMjV4MjQ4cCJ9.sqz82kpQdSi0_h3jFXjskg'
}).addTo(mymap);

var marker = L.marker([-7.7093349, 110.1173872]).addTo(mymap);
marker.bindPopup("<b>Desa Tawangsari</b>").openPopup();

$(".counter").counterUp({delay:10, time:700});