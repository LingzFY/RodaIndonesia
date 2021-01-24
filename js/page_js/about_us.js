// function initMap() {
//   // The location of Uluru
//   const uluru = { lat: -6.9577172, lng: 107.6375672 };
//   // The map, centered at Uluru
//   const map = new google.maps.Map(document.getElementById("maps-container"), {
//     zoom: 15,
//     center: uluru,
//   });
//   // The marker, positioned at Uluru
//   const marker = new google.maps.Marker({
//     position: uluru,
//     map: map,
//   });
// }

// -6.9577172, 107.6375672

// Creating map options
var mapOptions = {
  center: [-6.9577172, 107.6375672],
  zoom: 18,
};
// Creating a map object
var map = new L.map("maps-container", mapOptions);

// Creating a Layer object
var layer = new L.TileLayer(
  "http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
);

// Adding layer to the map
map.addLayer(layer);

// Creating a marker
var LeafIcon = L.Icon.extend({
  options: {
      
      iconSize: [30, 52],
      shadowSize: [50, 64],
      iconAnchor: [22, 94],
      shadowAnchor: [4, 62],
      popupAnchor: [-3, -76]
  }
});



var markers_icon = new LeafIcon ({ iconUrl: 'assets/icon/marker.png' });

L.marker([-6.9577172, 107.6375672], { icon: markers_icon }).addTo(map);
