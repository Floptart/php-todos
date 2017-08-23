<?php

// function connectToDb() 
// {
//     $servername = getenv('IP');
//     $username = 'root';
//     $password = "";
//     $database = "mytodo";
//     $dbport = 3306;
//     try {
//         return new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//     } catch (PDOException $e) {
//         die($e->getMessage());
//     }
// }

// function fetchAllTasks($pdo) 
// {
//     $statement = $pdo->prepare("select * from todos");
//     $statement->execute();
//     return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
// }

function dd($data) 
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}