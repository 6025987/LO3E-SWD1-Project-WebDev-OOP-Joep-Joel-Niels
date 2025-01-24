<?php
include 'PDO-connectie.php';

function fetchAllFilms($db) {
    try {
        
        $stmt = $db->prepare("SELECT * FROM films");
        $stmt->execute();
        return $stmt->fetchAll(); 
    } catch (PDOException $error) {
        die("Query failed: " . $error->getMessage());
    }
}

function insertTestData($data, $db) {
    try {

        $stmt = $db->prepare("INSERT INTO films (title, genre, release_year) VALUES (:title, :genre, :release_year)");

        foreach ($data as $film) {

            $title = htmlspecialchars($film['title'], ENT_QUOTES, 'UTF-8');
            $genre = htmlspecialchars($film['genre'], ENT_QUOTES, 'UTF-8');
            $release_year = (int) $film['release_year'];  

            $stmt->bindValue(':title', $title, PDO::PARAM_STR);
            $stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
            $stmt->bindValue(':release_year', $release_year, PDO::PARAM_INT);
            $stmt->execute();
        }

        echo "Data rows successfully added to the database.";
    } catch (PDOException $error) {
        die("Insertion failed: " . $error->getMessage());
    }
}


$data = fetchAllFilms($db);
if ($data) {
    echo "Films in the database:<br>";
    foreach ($data as $film) {
        echo 'Title: ' . htmlspecialchars($film['title'], ENT_QUOTES, 'UTF-8') . '<br>';
        echo 'Genre: ' . htmlspecialchars($film['genre'], ENT_QUOTES, 'UTF-8') . '<br>';
        echo 'Release Year: ' . htmlspecialchars($film['release_year'], ENT_QUOTES, 'UTF-8') . '<br>';
    }
} else {
    echo "No data found in the films table.";
}

/*
$testData = [
    ['title' => 'Inception', 'genre' => 'Sci-Fi', 'release_year' => 2010],
    ['title' => 'The Dark Knight', 'genre' => 'Action', 'release_year' => 2008],
    ['title' => 'Pulp Fiction', 'genre' => 'Crime', 'release_year' => 1994],
    ['title' => 'Interstellar', 'genre' => 'Sciencefiction', 'release_year' => 2014],
];
insertTestData($testData);
*/
?>
