<?php

$table=$_GET['table'];

if($table=="player"){
    include("../DBConnexion.php");

$id=$_GET['id'];
    $query = "delete from players where player_id='$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");

}else if($table=="goalkeeper"){
    include("../DBConnexion.php");

    $id=$_GET['id'];
    $query = "delete from goalkeepers where goalkeeper_id='$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
}


?>