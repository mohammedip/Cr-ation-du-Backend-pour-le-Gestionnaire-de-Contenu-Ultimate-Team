<?php 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

function addPlayers(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    
        
        $name=test_input($_POST['player-name']);
        $photo=test_input($_POST["player-photo"]);
        $position=test_input($_POST["player-position"]);
        $nationality=test_input($_POST["player-nationality"]);
        $club=test_input($_POST["player-club"]);
        $rating=test_input($_POST["player-rating"]);
        $pace=test_input($_POST["player-pace"]);
        $shooting=test_input($_POST["player-shooting"]);
        $passing=test_input($_POST["player-passing"]);
        $dribbling=test_input($_POST["player-dribbling"]);
        $defending=test_input($_POST["player-defending"]);
        $physical=test_input($_POST["player-physical"]);
    
    if( empty($name) || empty($photo) || empty($position) || empty($nationality) || empty($club) || empty($rating) || empty($pace) || empty($shooting) || empty($passing) || empty($dribbling)|| empty($defending)|| empty($physical)){
    
    return;
    
    }else{
   
        include("../DBConnexion.php");
        $query = "INSERT INTO players (nom, id_img, nationality_id, club_id, posiition, rating, pace, shooting, pasing, dribbling, defending, physical) VALUES
        ('$name', '$photo',  '$nationality', '$club','$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
        $result = mysqli_query( $conn, $query);
        
        header("Location: ../dashboard.php");
        
        }
        }else{
            return;
        }
    }
    
    
    

function deletePlayer(){

    include("../DBConnexion.php");

    $id=$_GET['id'];
    $query = "delete from players where player_id='$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
   }
   
   

   function updatePlayer(){
    include("../DBConnexion.php");

    $name=$_POST['player-name'];
    $photo=$_POST["player-photo"];
    $nationality=$_POST["player-nationality"];
    $club=$_POST["player-club"];
    $rating=$_POST["player-rating"];
    $pace=$_POST["player-pace"];
    $shooting=$_POST["player-shooting"];
    $passing=$_POST["player-passing"];
    $dribbling=$_POST["player-dribbling"];
    $defending=$_POST["player-defending"];
    $physical=$_POST["player-physical"];

    if( empty($name) || empty($photo) || empty($position) || empty($nationality) || empty($club) || empty($rating) || empty($pace) || empty($shooting) || empty($passing) || empty($dribbling)|| empty($defending)|| empty($physical)){
    
        return;
        
        }else{
    $id=$_GET['id'];
    $query = "UPDATE players SET nom = $name, id_img= $photo, nationality_id= $nationality, club_id= $club
    , posiition=$position , rating= $rating, pace= $pace, shooting= $shooting, pasing= $passing, dribbling= $dribbling
    , defending= $defending, physical= $physical WHERE player_id = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    
   }header("Location: ../dashboard.php");
   }

   if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['table'])) {
            if ($_GET['table'] === "update") {
                updatePlayer();

            } elseif ($_GET['table'] === "delete") {
                deletePlayer();

            } 
        }
    } else {
        addPlayers();

    }
    header("Location: ../dashboard.php");
  
?>