$(window).on("load", function () {

  //Maps Init
  var map1 = L.map("maps").setView([-6.957732994965709, 107.63974526786967], 17);
  var map2 = L.map("maps-cabang").setView([-6.865153025645677, 107.52396009973685], 17);

  // Maps Layer
  L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
    {
      attribution:
        'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: "mapbox/streets-v11",
    }
  ).addTo(map1);

  L.tileLayer(
    "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
    {
      attribution:
        'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: "mapbox/streets-v11",
    }
  ).addTo(map2);

  // Marker
  var LeafIcon = L.Icon.extend({
		options: {
			iconSize: [20, 40],
			iconAnchor: [10, 40]
		}
	});
	var iconMap = new LeafIcon({iconUrl: "assets/icon/marker.png"});

  L.marker([-6.957732994965709, 107.63974526786967], {icon: iconMap}).addTo(map1);
	L.marker([-6.865153025645677, 107.52396009973685], {icon: iconMap}).addTo(map2);
});
