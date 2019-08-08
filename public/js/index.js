
var mymap = L.map('mapid').setView([-7.708665234920596, 110.12553572323668], 14);

L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.outdoors',
    accessToken: 'pk.eyJ1IjoidmluY2VudG1pY2hhZWwwODkiLCJhIjoiY2p5MTkyNnVkMGJoYzNoczdiMjV4MjQ4cCJ9.sqz82kpQdSi0_h3jFXjskg'
}).addTo(mymap);

var marker = L.marker([-7.708665234920596, 110.12553572323668]).addTo(mymap);
marker.bindPopup("<b>Desa Tawangsari</b>").openPopup();

jQuery(document).ready(function($) {
    $('.counter').counterUp({
        delay: 10,
        time: 700
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
          $('.scroll-top').fadeIn();
        } else {
          $('.scroll-top').fadeOut();
        }
      });
  
      $('.scroll-top').click(function () {
        $("html, body").animate({
          scrollTop: 0
        }, 600);
          return false;
      });
});