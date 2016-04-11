<?php

//connect
require_once ('../db.php');
//select games and store results
$sql = 'SELECT * FROM games';

//check for a specific game name in the url
if(!empty($_GET['name'])){
    $sql .= " WHERE name = :name";
}

$cmd = $conn->prepare($sql);
if(!empty($_GET['name'])){
    $cmd -> bindParam(':name', $_GET['name'], PDO::ERRMODE_EXCEPTION);
}
$cmd->execute();
$games = $cmd->fetchAll();
//convert php data to json
$json_obj = json_encode($games);
// display the data
echo $json_obj;

?>