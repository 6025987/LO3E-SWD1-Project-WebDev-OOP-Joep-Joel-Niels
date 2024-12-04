<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Cinemas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">MBO Cinemas</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Films</a></li>
                <li><a href="#">Reserveringen</a></li>
                <li><a href="#">Aanbiedingen</a></li>
            </ul>
        </nav>
    </header>

    <!-- Zoekfunctie -->
    <div class="search-bar">
        <input type="text" placeholder="Zoek hier...">
        <button><img src="search-icon.png" alt="Zoek"></button>
    </div>

    <!-- Hoofdcontent -->
    <main>
        <section class="promo-slide">
            <div class="promo-content">Promotie Slide</div>
        </section>

        <div class="buttons">
            <button>Vind bioscoop in de buurt</button>
            <button>Selecteer bioscoop en boek nu</button>
        </div>
    </main>

    <!-- Sidebar -->
    <aside>
        <button>Inloggen</button>
        <button>Account aanmaken</button>

        <div class="film-boeken">
            <h3>Film boeken:</h3>
            <form>
                <label for="bioscoop">Selecteer bioscoop:</label>
                <select id="bioscoop" name="bioscoop">
                    <option>Kies een bioscoop</option>
                </select>

                <label for="film">Selecteer film:</label>
                <select id="film" name="film">
                    <option>Kies een film</option>
                </select>

                <label for="datum">Selecteer datum:</label>
                <input type="date" id="datum" name="datum">

                <label for="tijd">Selecteer tijd:</label>
                <input type="time" id="tijd" name="tijd">

                <button type="submit">Boek nu</button>
            </form>
        </div>

        <button>Film beoordelingen</button>
    </aside>

    <!-- Footer -->
    <footer>
        <div class="footer-links">
            <a href="#">Onze Locaties</a>
            <a href="#">Klantenservice</a>
            <a href="#">Contact</a>
        </div>
        <div class="social-media">
            <a href="#"><img src="phone-icon.png" alt="Telefoon"></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
            <a href="#"><img src="mail-icon.png" alt="E-mail"></a>
        </div>
    </footer>
</body>
</html>
