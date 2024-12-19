<?php



// add player and goalkeper ---------------------------------------------
function addPlayers(){
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
    
if($position=="GK"){

    include("../DBConnexion.php");
$query = "INSERT INTO goalkeepers (nom, id_img, nationality_id, club_id,posiition, rating, diving, handling, kicking, reflexes, speed, positioning) VALUES
('$name', '$photo',  '$nationality', '$club','$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
$result = mysqli_query( $conn, $query);

}else{

    include("../DBConnexion.php");
$query = "INSERT INTO players (nom, id_img, nationality_id, club_id, posiition, rating, pace, shooting, pasing, dribbling, defending, physical) VALUES
('$name', '$photo',  '$nationality', '$club','$position', '$rating', '$pace', '$shooting', '$passing', '$dribbling', '$defending', '$physical')";
$result = mysqli_query( $conn, $query);
}

header("Location: ../dashboard.php");
}
    }else{
        return;
    }
}
}

addPlayers();

// add nationality ---------------------------------------------

function addNationality(){
if($_SERVER['REQUEST_METHOD']=='POST'){

    $nationalityName=$_POST['Nationality-name'];
    $flag=$_POST["flag-photo"];
    
    
    if( empty($nationalityName) || empty($flag) ){
    
    return;
    
    }else{
        include("../DBConnexion.php");
    
    $query = "INSERT INTO nationalitys (nationality, flaag) VALUES
    ('$nationalityName', '$flag')";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }
    }
}
addNationality();

    // add club ---------------------------------------------

    function addClub(){
if($_SERVER['REQUEST_METHOD']=='POST'){

    $club=$_POST['club'];
    $logo=$_POST["logo"];
    
    
    if( empty($club) || empty($logo) ){
    
    return;
    
    }else{
        include("../DBConnexion.php");
    
    $query = "INSERT INTO clubs (club, id_img) VALUES
    ('$club', '$logo')";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }
    }
}
addClub();

?>