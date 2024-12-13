<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Cinemas - Films</title>
    <link rel="stylesheet" href="style.css">
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
 
    <div class="search-bar">
    <input type="text" placeholder="Zoek een film of bioscoop...">
    <button>🔍</button>
</div>
 
    <!-- Layout -->
    <div class="layout">
        <!-- Main Content -->
        <main>
            <h2 class="bioscoop-title">Populaire Films</h2>
            <div class="film-grid">
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
            </div>
            <div class="advertentie">AD</div>
        </main>
 
        <!-- Sidebar -->
        <aside>
            <button>Inloggen</button>
            <button>Account aanmaken</button>
            <form action="films.html" method="get">
                <label for="bioscoop">Film boeken:</label>
                <select id="bioscoop" name="bioscoop">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Rotterdam">Rotterdam</option>
                    <option value="Utrecht">Utrecht</option>
                </select>
                <button type="submit">Boek Film</button>
            </form>
        </aside>
    </div>
 
    <!-- Footer -->
    <footer>
        <div>
            <a href="locaties.php">Onze Locaties</a>
            <a href="klantenservice.php">Klantenservice</a>
            <a href="contact.php">Contact</a>
        </div>
    </footer>
</body>
</html>