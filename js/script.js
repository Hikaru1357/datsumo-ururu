$(function(){
	// 地図の初期化処理
	 function initMap() {
	 	//マップの色情報を設定
	 	var styles = [
	    {
	      stylers: [
	        { hue: "#004cff" },
	        { saturation: 30 }
	      ]
	    },
	    {
	      "featureType": "water",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#eaedfc" },
	        { "lightness": -10 }
	      ]
	    },{
	      "featureType": "landscape",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#eaedfa" },
	        { "lightness": 34 }
	      ]
	    },{
	      "featureType": "road.highway",
	      "elementType": "geometry.fill",
	      "stylers": [
	        { "color": "#eeeeee" },
	        { "lightness": 17 }
	      ]
	    },{
	      "featureType": "road.highway",
	      "elementType": "geometry.stroke",
	      "stylers": [
	        { "color": "#eeeeee" },
	        { "lightness": 29 },
	        { "weight": 0.2 }
	      ]
	    },{
	      "featureType": "road.arterial",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#eeeeee" },
	        { "lightness": 18 }
	      ]
	    },{
	      "featureType": "road.local",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#eeeeee" },
	        { "lightness": 16 }
	      ]
	    },{
	      "featureType": "poi",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#dadff6" },
	        { "lightness": 30 }
	      ]
	    },{
	      "featureType": "poi.park",
	      "elementType": "geometry",
	      "stylers": [
	        { "color": "#cfd6f4" },
	        { "lightness": 24 }
	      ]
	    },{
	      "elementType": "labels.text.stroke",
	      "stylers": [
	        { "visibility": "on" },
	        { "color": "#eeeeee" },
	        { "lightness": 16 }
	      ]
	    },{
	      "elementType": "labels.text.fill",
	      "stylers": [
	        { "saturation": 37 },
	        { "color": "#8687e3" },
	        { "lightness": 4 }
	      ]
	    },{
	      "featureType": "transit",
	      "elementType": "geometry",
	      "stylers": [
	        { "lightness": 17 },
	        { "color": "#dadff6" }
	      ]
	    },{
	      "featureType": "administrative",
	      "elementType": "geometry.fill",
	      "stylers": [
	        { "lightness": 21 },
	        { "color": "#ced2f2" }
	      ]
	    },{
	      "featureType": "administrative",
	      "elementType": "geometry.stroke",
	      "stylers": [
	        { "lightness": 16 },
	        { "weight": 1.2 },
	        { "color": "#ced5f4" }
	      ]
	    },{
	  }
	  ];

		var pos = {lat: 34.665115, lng: 135.4994828};
    var opts = {
      zoom: 17,		// 拡大率
      // styles,
      center: new google.maps.LatLng(pos)	// APIで準備されているgoogle.maps.LatLngクラスを使用して、センターの座標を設定
    };
    // APIで準備されているgoogle.maps.Mapクラスを使用して地図の表示領域を設定
    var map = new google.maps.Map(document.querySelector(".google-map"), opts);
    var marker = new google.maps.Marker({
      position: pos,
      map: map
    });

		var pos = {lat: 34.665115, lng: 135.4994828};
    var opts = {
      zoom: 17,		// 拡大率
      // styles,
      center: new google.maps.LatLng(pos)	// APIで準備されているgoogle.maps.LatLngクラスを使用して、センターの座標を設定
    };
    // APIで準備されているgoogle.maps.Mapクラスを使用して地図の表示領域を設定
    var map = new google.maps.Map(document.getElementById("map"), opts);
    var marker = new google.maps.Marker({
      position: pos,
      map: map
    });

  }
  initMap();
});
