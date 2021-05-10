<html lang="en">
<head>
    <meta charset= "UTF-8">
    <meta http-equiv= "X-UA-Compatible" content= "IE=edge">
    <meta name= "viewport" content= "width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" href= "https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity= "sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <style>
        
        #mapid {
            height: 100%;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div id= "mapid"></div>
    <iframe src= "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.647721185406!2d102.71853122915245!3d-2.3047251598748337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2e2c1f4b0a080f%3A0x425663cfa2f45c18!2sLapangan%20Sriwijaya%2C%20Simpang%20Tiga%2C%20Sarolangun%2C%20Jambi!5e0!3m2!1sid!2sid!4v1620621142209!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</body>
    
<script src= "https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<script>
    var mymap = L.map('mapid').setView([-5.3928335, 105.2095938], 10);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw'
    }).addTo(mymap);

    var marker = L.marker([-2.302812, 102.724035]).addTo(mymap); 

    var circle = L.circle([-2.313706, 102.750835], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 500
    }).addTo(mymap); //lingkaran

    var polygon = L.polygon([
                  [-2.306079, 102.719121],
                  [-2.304941, 102.719979],
                  [-2.304361, 102.719239],
                  [-2.305435, 102.718585]
    ]).addTo(mymap); //polygon

    marker.bindPopup("Masjid Al-Falah").openPopup();
    circle.bindPopup("Sarolangun");
    polygon.bindPopup("Lapangan Sriwijaya");
    //menampilkan info pada object yang di klik

    var popup = L.popup()
        .setLatLng([-2.302812, 102.724035])
        .setContent("I am a standalone popup.")
        .openOn(mymap);

    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(mymap);
    }
    mymap.on('click', onMapClick); //menampilkan data coordinat saat di klik
    
</script>
</html>
