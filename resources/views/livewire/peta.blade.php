<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Lokasi</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <style>
        #map {
            height: 100vh;
            width: 100%;
        }
    </style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="map"></div>

    <script>
        // Inisialisasi peta
        const map = L.map('map').setView([-3.657222, 128.190556], 10); // Koordinat Maluku (Ambon)

        // Tambahkan tile layer OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Tambahkan marker berdasarkan data dari server
        const locations = @json($lokasis);
        locations.forEach(location => {
            if (location.lintang && location.bujur) { // Validasi data
                L.marker([location.lintang, location.bujur])
                    .addTo(map)
                    .bindPopup(`<b>${location.nama_kuburan}</b><br>${location.lokasi}`);
            } else {
                console.warn('Lokasi dengan data tidak valid:', location);
            }
        });

    </script>
</body>
</html>
