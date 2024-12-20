<?php 

function addGoalkeepers(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
    
        if (isset($_POST["player-photo"]) && !empty($_POST['your_select'])) {
        $name=$_POST['player-name'];
        $photo=$_POST["player-photo"];
        $position=$_POST["player-position"];
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
   
    
        include("../DBConnexion.php");
    $query = "INSERT INTO goalkeepers (nom, id_img, nationality_id, club_id,posiition, rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
    ('$name', '$photo',  '$nationality', '$club','$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
    $result = mysqli_query( $conn, $query);
    
    
    
    
    }header("Location: ../dashboard.php");
        }else{
            return;
        }
    }
    }
    
    

    function deleteGoalkeeper(){

        include("../DBConnexion.php");

    $id=$_GET['id'];
    $query = "delete from goalkeepers where goalkeeper_id='$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }

    

    function updateGoalkeeper(){

        include("../DBConnexion.php");

    $name=$_POST['player-name'];
    $photo=$_POST["player-photo"];
    $position=$_POST["player-position"];
    $nationality=$_POST["player-nationality"];
    $club=$_POST["player-club"];
    $rating=$_POST["player-rating"];
    $pace=$_POST["player-pace"];
    $shooting=$_POST["player-shooting"];
    $passing=$_POST["player-passing"];
    $dribbling=$_POST["player-dribbling"];
    $defending=$_POST["player-defending"];
    $physical=$_POST["player-physical"];

$id=$_GET['id'];
    $query = "UPDATE  goalkeepers SET nom = $name, id_img= $photo, nationality_id= $nationality, club_id= $club
    , posiition= $position, rating= $rating, diving= $pace, handling= $shooting, kicking= $passing, reflexes= $dribbling
    , speed= $defending, positioning= $physical WHERE goalkeeper_id = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }

       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['table'])) {
            if ($_GET['table'] === "update") {
                updateGoalkeeper();

            } elseif ($_GET['table'] === "delete") {
                deleteGoalkeeper();

            } 
        }
    } else {
        addGoalkeepers();
        
    }
  
    header("Location: ../dashboard.php");
?>