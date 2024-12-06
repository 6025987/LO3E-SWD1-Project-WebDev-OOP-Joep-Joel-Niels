<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Cinemas - Klantenservice</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">MBO Cinemas</div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="films.php">Films</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
            </ul>
        </nav>
    </header>
 
    <!-- Klantenservice -->
    <main>
        <div class="klantenservice-container">
            <h1 class="klantenservice-title">Klantenservice</h1>
            <p class="klantenservice-description">
                Heb je een klacht of opmerking over onze bioscopen, films, of diensten? Vul het onderstaande formulier in
                en wij nemen zo snel mogelijk contact met je op.
            </p>
            <form>
                <label for="klacht">Je klacht of opmerking:</label>
                <textarea id="klacht" name="klacht" placeholder="Beschrijf hier je klacht of opmerking..."></textarea>
                <button type="submit">Verzenden</button>
            </form>
        </div>
    </main>
 
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
