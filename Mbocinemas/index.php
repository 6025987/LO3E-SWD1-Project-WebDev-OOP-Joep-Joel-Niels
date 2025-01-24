<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Cinemas - Home</title>
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
                <li><a href="filmreview.php">reviews</a></li>
                <li><a href="aanbiedingen.php">Aanbiedingen</a></li>
            </ul>
        </nav>
    </header>
 
    <!-- Zoekbalk -->
    <div class="search-bar">
        <input type="text" placeholder="Zoek een film of bioscoop...">
        <button>🔍</button>
    </div>
    <?php
include 'pdo.php';
?>
    <!-- Layout -->
    <div class="layout">
        <!-- Main Content -->
        <main>
            <section class="promotie-slide">
                <p>Promotie Slide</p>
            </section>
 
            <h2>Populaire Films</h2>
            <div class="film-grid">
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
                <div class="film-kaart">Populaire Film</div>
            </div>
        </main>
 
        <!-- Sidebar -->
        <aside>

        <h2>Login</h2>
    <form id="loginForm">
        <input type="text" id="loginUsername" placeholder="Username" required>
        <input type="password" id="loginPassword" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>

    <h2>Create Account</h2>
    <form id="registerForm">
        <input type="text" id="registerUsername" placeholder="Username" required>
        <input type="password" id="registerPassword" placeholder="Password" required>
        <button type="submit">Register</button>
    </form>

    <script>
        // Register a new account
        document.getElementById('registerForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const username = document.getElementById('registerUsername').value;
            const password = document.getElementById('registerPassword').value;

            const response = await fetch('/register', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username, password })
            });

            const result = await response.text();
            alert(result);
        });

        // Login
        document.getElementById('loginForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const username = document.getElementById('loginUsername').value;
            const password = document.getElementById('loginPassword').value;

            const response = await fetch('/login', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ username, password })
            });

            const result = await response.text();
            alert(result);
        });



        
        <h2>Delete Account</h2>
<form id="deleteAccountForm">
    <input type="text" id="deleteUsername" placeholder="Username" required>
    <button type="submit">Delete Account</button>
</form>

<script>
    // Delete an account
    document.getElementById('deleteAccountForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const username = document.getElementById('deleteUsername').value;

        const response = await fetch('/delete-account', {
            method: 'DELETE',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username })
        });

        const result = await response.text();
        alert(result);
    });
</script>


<script>
    // Delete an account
    document.getElementById('deleteAccountForm').addEventListener('submit', async (e) => {
        e.preventDefault();
        const username = document.getElementById('deleteUsername').value;

        const response = await fetch('/delete-account', {
            method: 'DELETE',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ username })
        });

        const result = await response.text();
        alert(result);
    });
</script>

            <form action="boek.php" method="get">
                <label for="bioscoop">Film boeken:</label>
                <select id="bioscoop" name="bioscoop">
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Rotterdam">Rotterdam</option>
                    <option value="Utrecht">Utrecht</option>
                    <option value="alphen aan den rijn">alphen aan den rijn</option>
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
 
