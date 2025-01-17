<?php
function getDatabaseConnection() {
    static $databaseConnection = null;

    if ($databaseConnection === null) {
        $host = "localhost";
        $databaseName = "test_mbo_cinemas";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host;dbname=$databaseName";

        try {
            $databaseConnection = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]);
        } catch (PDOException $error) {
            die("Connection failed: " . $error->getMessage());
        }
    }

    return $databaseConnection;
}

function fetchAllFilms() {
    try {
        $db = getDatabaseConnection();

        $stmt = $db->prepare("SELECT * FROM films");
        $stmt->execute();
        return $stmt->fetchAll(); 
    } catch (PDOException $error) {
        die("Query failed: " . $error->getMessage());
    }
}

function insertTestData($data) {
    try {
        $db = getDatabaseConnection();

        $stmt = $db->prepare("INSERT INTO films (title, genre, release_year) VALUES (:title, :genre, :release_year)");

        foreach ($data as $film) {

            $stmt->bindValue(':title', $film['title'], PDO::PARAM_STR);
            $stmt->bindValue(':genre', $film['genre'], PDO::PARAM_STR);
            $stmt->bindValue(':release_year', $film['release_year'], PDO::PARAM_INT);
            $stmt->execute();
        }

        echo "Data rows succesvol toegevoegd aan phpmyadmin database .";
    } catch (PDOException $error) {
        die("Insertion failed: " . $error->getMessage());
    }
}

$data = fetchAllFilms();
if ($data) {
    echo "Films in the database:\n";
    print_r($data);
} else {
    echo "No data found in the films table.";
}


/* 
$testData = [
    ['title' => 'Inception', 'genre' => 'Sci-Fi', 'release_year' => 2010],
    ['title' => 'The Dark Knight', 'genre' => 'Action', 'release_year' => 2008],
    ['title' => 'Pulp Fiction', 'genre' => 'Crime', 'release_year' => 1994],
];
insertTestData($testData);
*/
?>
