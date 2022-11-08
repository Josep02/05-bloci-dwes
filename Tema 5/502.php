<?php
try {
    $pdo = new PDO("mysql:host=localhost; dbname=2023-movies", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $a = $pdo->prepare('INSERT INTO movie (id, title, overview, release_date, movie_status, tagline, vote_average, vote_count, poster, genre_id) VALUES 
                                                (:id, :title, :overview, :release_date, :movie_status, :tagline, :vote_average, :vote_count, :poster, :genre_id)');
    $a->execute([
        ':id' => '476890',
        ':title' => 'Dune',
        ':overview' => '',
        ':release_date' => '2021-02-23',
        ':movie_status' => 'Released',
        ':tagline' => '',
        ':vote_average' => '0',
        ':vote_count' => '0',
        ':poster' => '',
        ':genre_id' => '18'
    ]);

    $b = $pdo->prepare('UPDATE movie SET title= :copia WHERE title= :title ');
    $b->execute([
        ':title' => 'Dune',
        ':copia' => 'Dune_copia'
    ]);

    $c = $pdo->prepare('INSERT INTO genre (id, name, number_of_movies) VALUES (:id, :name, :number_of_movies)
                        AND UPDATE movie SET genre_id= :genre_id');
    $c->execute([
        ':id' => 10,
        ':name' => 'Sci-Fi',
        ':number_of_movies' => '',
        ':genre_id' => 10
    ]);

    $d = $pdo->prepare('DELETE FROM genre WHERE id= :id');
    $d->execute([
       ':id' => 10
    ]);

    $e = $pdo->prepare('DELETE FROM movie WHERE id= :id AND DELETE FROM genre WHERE id= :id');
    $e->execute([
        ':id' => 10
    ]);


} catch (PDOException $e){
    echo 'Error: ' . $e->getMessage();
}
