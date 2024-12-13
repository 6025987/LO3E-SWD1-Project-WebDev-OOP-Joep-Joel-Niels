<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MBO Cinemas - Locaties</title>
<link rel="stylesheet" href="style.css">
<script src="https://maps.googleapis.com/maps/api/js?helaas-geen-IPA-sleutel"></script>
</head>
<body>
<!-- Header -->
<header>
<div class="logo">MBO Cinemas</div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="films.php">Films</a></li>
<li><a href="#">Reserveringen</a></li>
<li><a href="aanbiedingen.php">Aanbiedingen</a></li>
</ul>
</nav>
</header>
 
    <!-- Zoekbalk -->
<div class="search-bar">
<input type="text" placeholder="Zoek een locatie...">
<button>:mag:</button>
</div>
 
    <!-- Kaart en Locaties -->
<main>
<h1>Onze Locaties</h1>
<div id="map"></div>
 
        <!-- Locaties lijst -->
<section class="locations-list">
<h2>Beschikbare Locaties</h2>
<ul>
<li><strong>Leiden</strong> - Bètaplein 18 - Leiden (Lammenschans)</li>
<li><strong>Gouda</strong> - Groen van Prinsterersingel 52 - Gouda</li>
<li><strong>Alphen aan den Rijn</strong> - Ambonstraat 1 - Alphen aan den Rijn</li>
</ul>
</section>
</main>
 
    <!-- Footer -->
<footer>
<div>
<a href="locaties.php">Onze Locaties</a>
<a href="klantenservice.php">Klantenservice</a>
<a href="contact.php">Contact</a>
</div>
</footer>
 
    <script>
        function initMap() {
            // Kaart opties
            const mapOptions = {
                zoom: 7,
                center: { lat: 52.0907, lng: 5.1214 }, // Utrecht als middelpunt
            };
 
            // Kaart aanmaken
            const map = new google.maps.Map(document.getElementById("map"), mapOptions);
 
            // Locaties
            const locations = [
                { name: "Leiden", coords: { lat: 52.1576, lng: 4.4904 } },
                { name: "Gouda", coords: { lat: 52.0131, lng: 4.7106 } },
                { name: "Alphen aan den Rijn", coords: { lat: 52.1289, lng: 4.6542 } },
            ];
 
            // Markers toevoegen
            locations.forEach((location) => {
                const marker = new google.maps.Marker({
                    position: location.coords,
                    map: map,
                    title: location.name,
                });
 
                // Info venster
                const infoWindow = new google.maps.InfoWindow({
                    content: `<h3>${location.name}</h3><p>MBO Cinemas - ${location.name}</p>`,
                });
 
                marker.addListener("click", () => {
                    infoWindow.open(map, marker);
                });
            });
        }
 
        // Initialiseer de kaart
        window.onload = initMap;
</script>
</body>
</html>