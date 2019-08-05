
var mymap = L.map('mapid2').setView([-7.708665234920596, 110.12553572323668], 16);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.satellite',
    accessToken: 'pk.eyJ1IjoidmluY2VudG1pY2hhZWwwODkiLCJhIjoiY2p5MTkyNnVkMGJoYzNoczdiMjV4MjQ4cCJ9.sqz82kpQdSi0_h3jFXjskg'
    //center: [4.899, 52.372]
}).addTo(mymap);

var myIcon = L.icon({
    iconUrl: '/res/pine-01.png',
    iconSize: [38, 38   ],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    shadowUrl: 'my-icon-shadow.png',
    shadowSize: [68, 95],
    shadowAnchor: [22, 94]
});
//mliwis
var mliwis = L.marker([-7.710992, 110.127211],{icon: myIcon}).addTo(mymap);
mliwis.bindPopup("<b>Mliwis Hill</b>").openPopup();


var marker = L.marker([-7.708127, 110.125682]).addTo(mymap);
marker.bindPopup("<b>Desa Tawangsari</b>").openPopup();

var myIcon2 = L.icon({
    iconUrl: '/res/goat_01.png',
    iconSize: [38, 38   ],
    iconAnchor: [22, 94],
    popupAnchor: [-3, -76],
    shadowUrl: 'my-icon-shadow.png',
    shadowSize: [68, 95],
    shadowAnchor: [22, 94]
});

L.marker([-7.71710663, 110.12001473],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71716471, 110.12011643],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71677695, 110.12044616],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71675364, 110.12043792],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71676684, 110.12048479],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71631746, 110.1211921],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71654485, 110.12040343],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71637918, 110.1203868],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71602208, 110.1203424],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71606185, 110.11970731],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7163106, 110.11978147],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71655426, 110.12005873],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71664472, 110.12011091],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71642348, 110.12025007],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71668957, 110.11956163],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71684155, 110.11963015],{icon: myIcon2}).addTo(mymap);

L.marker([-7.71681832, 110.12230305],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71682513, 110.1219562],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71641413, 110.12228733],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71657013, 110.1219608],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7161629, 110.12066938],{icon: myIcon2}).addTo(mymap);

L.marker([-7.70483878, 110.12995678],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70506043, 110.12972452],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70519804, 110.12965863],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7049119, 110.13011555],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70507711, 110.13028713],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7044883, 110.13026864],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7044104, 110.130584],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70486119, 110.13062859],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70397005, 110.13030593],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70373666, 110.12957257],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70370926, 110.13061838],{icon: myIcon2}).addTo(mymap);

L.marker([-7.70428036, 110.12912498],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70254346, 110.1299716],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70276845, 110.12985987],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70237978, 110.13031005],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70270373, 110.13030406],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70305013, 110.13027727],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7034345, 110.12964743],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7032837, 110.1292127],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70353627, 110.12926118],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70355182, 110.12948238],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70379998, 110.12883523],{icon: myIcon2}).addTo(mymap);

L.marker([-7.70697501, 110.12937791],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70696208, 110.12997068],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70717083, 110.12951858],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70653391, 110.13011348],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7058524, 110.13021159],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70443195, 110.12913297],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70388921, 110.12898493],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70396671, 110.1284905],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70409775, 110.12862129],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70369763, 110.12826209],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70292371, 110.12768656],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70304144, 110.1274337],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7024055, 110.12828146],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70246775, 110.12827973],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7021217, 110.12847657],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70171277, 110.12838053],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70188296, 110.12827678],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70255907, 110.12852129],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70282192, 110.12845494],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70299264, 110.12871162],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70164769, 110.12922639],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70156707, 110.12917904],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70305995, 110.1287195],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70333235, 110.1285164],{icon: myIcon2}).addTo(mymap);

L.marker([-7.71299918, 110.11960123],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71282607, 110.11972514],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71393548, 110.1196361],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71388178, 110.11969522],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71413798, 110.11953124],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71307361, 110.12099626],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71301123, 110.12099293],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71022835, 110.12245831],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71120695, 110.12139848],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71026885, 110.1220991],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71025705, 110.12250979],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70938781, 110.12294189],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70939394, 110.12244145],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70939284, 110.12204658],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70857006, 110.12363278],{icon: myIcon2}).addTo(mymap);

L.marker([-7.70845735, 110.12179373],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70865679, 110.12226898],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70865679, 110.12226898],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70750917, 110.12242102],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70599026, 110.12054714],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70588766, 110.12050132],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70570693, 110.12060181],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70585937, 110.12043709],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70577224, 110.12059857],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70568822, 110.12016502],{icon: myIcon2}).addTo(mymap);
L.marker([-7.70526728, 110.12011295],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71211829, 110.11984338],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71226295, 110.11958351],{icon: myIcon2}).addTo(mymap);

L.marker([-7.7140375, 110.12551211],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71610728, 110.12255312],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71580649, 110.12301838],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71511378, 110.12321323],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71486055, 110.12374957],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71466037, 110.12400272],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71406543, 110.12445737],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7136122, 110.1244904],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71342052, 110.12462376],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71364292, 110.12489249],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71376961, 110.12494138],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71389951, 110.12499055],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7140228, 110.12497392],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71415239, 110.1249855],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71458984, 110.12499761],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71521967, 110.12535531],{icon: myIcon2}).addTo(mymap);
L.marker([-7.7152969, 110.12532645],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71530239, 110.12531078],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71539855, 110.12533288],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71552676, 110.12472176],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71548569, 110.12463863],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71534753, 110.12444949],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71539271, 110.12432415],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71545953, 110.12421828],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71554114, 110.12411681],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71566282, 110.12398329],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71580642, 110.12386709],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71604243, 110.12368306],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71609406, 110.123493],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71626254, 110.12349432],{icon: myIcon2}).addTo(mymap);

L.marker([-7.7154985, 110.12514347],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71599612, 110.12569885],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71617657, 110.12580962],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71619533, 110.12603522],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71565338, 110.12599085],{icon: myIcon2}).addTo(mymap);
L.marker([-7.71563856, 110.12599378],{icon: myIcon2}).addTo(mymap);

