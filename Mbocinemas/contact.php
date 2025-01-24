<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Contact Us</title>

  <?php
include 'pdo.php';
?>
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


  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      color: #333;
    }

    .headers {
      text-align: center;
      padding: 2rem 1rem;
      background: #d3d3d3;
    }

    .headers h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
    }

    .headers p {
      font-size: 1rem;
      color: #555;
    }

    .container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 2rem;
    }

    .left {
      flex: 1;
      min-width: 300px;
      margin-right: 1rem;
    }

    .left h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .contact-details {
      line-height: 1.8;
    }

    .contact-details p {
      margin: 0.5rem 0;
    }

    .email {
      margin-top: 1rem;
    }

    .right {
      flex: 1;
      min-width: 300px;
      background-color: black;
      padding: 1.5rem;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .right form {
      display: flex;
      flex-direction: column;
    }

    .right form label {
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    .right form input,
    .right form select,
    .right form textarea {
      margin-bottom: 1rem;
      padding: 0.75rem;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    .right form button {
      padding: 0.75rem;
      background-color: white;
      color: black;
      border: none;
      border-radius: 5px;
      font-size: 1rem;
      cursor: pointer;
    }

    .right form button:hover {
      background-color: light_grey;
    }
  </style>
</head>
<body>

<div class="headers">
    <h1>hier kunt u contact met ons opnemen</h1>
    <p>heeft u vragen over het reserveren?,aanbiedingen of over de betaling stel uw vragen!</p>
  </div>


  <div class="container">
    <div class="left">
      <h2>ons telefoon nummer</h2>
      <div class="contact-details">
        <p><strong>Nederland:</strong> +31 85 001 3362</p>
        <div class="email">
          <p><strong>Email:</strong> reserveren@mbocinemas.com | support@mbocinemas.com</p>
        </div>
      </div>
    </div>

    <div class="right">
      <form action="#">
        <label for="first-name">Voornaam:</label>
        <input type="text" id="first-name" placeholder="voornaam:" required>

        <label for="last-name">Achternaam:</label>
        <input type="text" id="last-name" placeholder="achternaam:" required>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="email-address:" required>

        <label for="query">wat voor soort vraag heeft u?</label>
        <select id="query" required>
          <option value="sales">Reserveringen</option>
          <option value="support">betaling</option>
          <option value="billing">aanbiedingen</option>
          <option value="other">Andere</option>
        </select>

        <label for="phone">Telefoonnummer:</label>
        <input type="tel" id="phone" placeholder="Uw telefoonnummer:" required>

        <label for="message">hier is jou bericht</label>
        <textarea id="message" rows="4" placeholder="Type hier uw bericht..." required></textarea>

        <button type="submit">Verzenden</button>
      </form>
    </div>
  </div>

</body>
</html>






    <footer>
        <div>
            <a href="locaties.php">Onze Locaties</a>
            <a href="klantenservice.php">Klantenservice</a>
            <a href="contact.php">Contact</a>
        </div>
    </footer>
</body>
</html>