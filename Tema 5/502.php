<?php
try {
    $pdo = new PDO("mysql:host=localhost; dbname=2023-movies", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $a = $pdo->prepare('INSERT INTO movie (id, title, overview, release_date, movie_status, tagline, vote_average, vote_count, poster, genre_id) VALUES 
                                                (:id, :title, :overview, :release_date, :movie_status, :tagline, :vote_average, :vote_count, :poster, :genre_id)');
    $a->execute([
        ':id' => '476890',
        ':title' => 'Avatar',
        ':overview' => '',
        ':release_date' => '2011-02-23',
        ':movie_status' => 'Released',
        ':tagline' => '',
        ':vote_average' => '0',
        ':vote_count' => '0',
        ':poster' => '',
        ':genre_id' => '18'
    ]);

    echo $a->rowCount();

} catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
}