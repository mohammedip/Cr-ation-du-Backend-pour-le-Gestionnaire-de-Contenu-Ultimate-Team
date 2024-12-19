<?php



if($_POST["player-position"]=="GK"){
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
    $query = "UPDATE  goalkeepers SET ContactName = 'Alfred Schmidt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt'
    , City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt'
    , City= 'Frankfurt', City= 'Frankfurt' WHERE CustomerID = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");

}else if($_POST["player-position"]!="GK" && !empty($_POST["player-position"])){
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

    $id=$_GET['id'];
    $query = "UPDATE players ContactName = 'Alfred Schmidt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt'
    , City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt', City= 'Frankfurt'
    , City= 'Frankfurt', City= 'Frankfurt' WHERE CustomerID = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
}else if(empty($_POST["player-position"]) && !empty($_POST["flag-photo"])){
   
    $nationalityName=$_POST['Nationality-name'];
    $flag=$_POST["flag-photo"];
    
    if( empty($nationalityName) || empty($flag) ){
    
    return;
    
    }else{ 
    include("../DBConnexion.php");
    $id=$_GET['id'];
    $query = "UPDATE nationalitys SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
    }
}else if(empty($_POST["player-position"]) && empty($_POST["flag-photo"]) && !empty($_POST["logo"])){
    include("../DBConnexion.php");
    $club=$_POST['club'];
    $logo=$_POST["logo"];

    $id=$_GET['id'];
    $query = "UPDATE clubs SET ContactName = 'Alfred Schmidt', City= 'Frankfurt' WHERE CustomerID = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
    header("Location: ../dashboard.php");
}


?>