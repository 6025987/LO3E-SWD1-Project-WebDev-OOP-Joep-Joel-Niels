<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
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
    <title>Films</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        /* Stijlen voor filmkaarten */
        .film-card {
            display: inline-block;
            width: 200px;
            margin: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .film-card img {
            width: 100%;
            border-bottom: 1px solid #ddd;
            border-radius: 5px 5px 0 0;
        }

        .film-card h3 {
            margin: 10px 0;
            font-size: 18px;
        }

        /* Stijlen voor de pop-up (modal) */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
            width: 300px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .modal h2 {
            margin: 0 0 20px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            color: white;
        }

        .button.green {
            background-color: green;
        }

        .button.red {
            background-color: red;
        }

        .button:not(:last-child) {
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <h1>Beschikbare films</h1>
    <div id="films"></div>

    <!-- Pop-up modal -->
    <div class="modal" id="noFilmsModal">
        <div class="modal-content">
            <h2>Geen films beschikbaar!</h2>
            <p>Helaas zijn er geen films beschikbaar voor deze locatie.</p>
            <button class="button red" onclick="window.location.href='index.php'">Terug</button>
            <button class="button green" onclick="closeModal()">Verder</button>
        </div>
    </div>

    <script>
        // Haal de parameter 'bioscoop' uit de URL
        const urlParams = new URLSearchParams(window.location.search);
        const bioscoop = urlParams.get('bioscoop');

        // Lijst met films per stad met afbeeldingen
        const filmsPerStad = {
    Amsterdam: [
        { title: 'De minecraft film', img: 'img/image.png' },
        { title: 'Venom', img: 'img/image2.png' },
        { title: 'Michiel de ruyter', img: 'img/image3.png' }
    ],
    Rotterdam: [
        { title: 'Super Mario Bros', img: 'img/image4.png' },
        { title: 'Interstellar', img: 'img/image5.png' },
        { title: 'Shrek', img: 'img/image6.png' }
    ],
    Utrecht: [
        { title: 'Film X', img: 'img/image7.png' },
        { title: 'Film Y', img: 'img/image8.png' },
        { title: 'Film Z', img: 'img/image9.png' }
    ]
};

        // Selecteer de juiste films
        const films = filmsPerStad[bioscoop] || [];
        const filmsDiv = document.getElementById('films');
        const modal = document.getElementById('noFilmsModal');

        if (films.length > 0) {
            // Toon films als kaarten
            filmsDiv.innerHTML = `<h2>Films in ${bioscoop}:</h2>` + 
                films.map(film => `
                    <div class="film-card">
                        <img src="${film.img}" alt="${film.title}">
                        <h3>${film.title}</h3>
                    </div>
                `).join('');
        } else {
            // Toon de pop-up als er geen films zijn
            filmsDiv.innerHTML = `<p>Geen films beschikbaar voor ${bioscoop}.</p>`;
            modal.style.display = "flex";
        }

        // Sluit de pop-up
        function closeModal() {
            modal.style.display = "none";
        }
    </script>
<?php
include 'pdo.php';
?>
<footer>
        <div>
            <a href="locaties.php">Onze Locaties</a>
            <a href="klantenservice.php">Klantenservice</a>
            <a href="contact.php">Contact</a>
        </div>
    </footer>
</body>
</html>
