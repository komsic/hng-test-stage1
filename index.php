<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "books";

    try {
    		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // begin the transaction
        $conn->beginTransaction();
        // our SQL statements
        $conn->exec("INSERT INTO MyFavBooks (title, author) 
        VALUES ('The 7 Habits of Highly Effective People', 'Stephen Covey')");

        $conn->exec("INSERT INTO MyFavBooks (title, author) 
        VALUES ('Percy Jackson & the Olympians Series', 'Rick Riordan')");

        $conn->exec("INSERT INTO MyFavBooks (title, author) 
        VALUES ('The Hunger Games Series', 'Suzzane Collins')");

        $conn->exec("INSERT INTO MyFavBooks (title, author) 
        VALUES ('Harry Potter Series', 'J. K. Rowling')");
        
        $conn->exec("INSERT INTO MyFavBooks (title, author) 
        VALUES ('Codex Alera Series', 'Jim Bucther')");

    } catch (PDOExeption $e) {
    	// roll back the transaction if something failed
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }


    $res = $conn->query('SELECT * FROM MyFavBooks ORDER BY id');

    $users = $res->fetchAll(PDO::FETCH_OBJ);
    echo "<strong>List of My Favourite Books.</strong><br>";
    foreach ($users as $key => $user) {
        echo '('.$user->id.') '.$user->title.' by '.$user->author.'<br>';
    }
?>