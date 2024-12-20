<?php

include("DBConnexion.php");
function addClub(){
if($_SERVER['REQUEST_METHOD']=='POST'){

    $club=$_POST['club'];
    $logo=$_POST["logo"];
    
    
    if( empty($club) || empty($logo) ){
    
    return;
    
    }else{
    
    $query = "INSERT INTO clubs (club, id_img) VALUES
    ('$club', '$logo')";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }
    }
}
addClub();

function updateClub(){
    
include("../DBConnexion.php");
    $club=$_POST['club'];
    $logo=$_POST["logo"];

    $id=$_GET['id'];
    $query = "UPDATE clubs SET club = $club, id_img= $logo WHERE club_id = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
}

 
   if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['table'])) {
        if ($_GET['table'] === "update") {
            updateClub();

        } 
    }
    } else {
        addClub();
        
    }

    header("Location: ../dashboard.php");
?>