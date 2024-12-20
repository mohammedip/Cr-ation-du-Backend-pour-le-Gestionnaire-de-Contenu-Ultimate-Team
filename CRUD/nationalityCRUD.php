<?php 

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
    
    
    
    }header("Location: ../dashboard.php");
    }
}


function updateNationality(){

    $nationalityName=$_POST['Nationality-name'];
    $flag=$_POST["flag-photo"];
    
    if( empty($nationalityName) || empty($flag) ){
    
    return;
    
    }else{ 
    include("../DBConnexion.php");
    $id=$_GET['id'];
    $query = "UPDATE nationalitys SET nationality = $nationalityName, flaag= $flag WHERE nationality_id = '$id'";
    $result = mysqli_query( $conn, $query);
    
    
   
    } header("Location: ../dashboard.php");
}


if($_GET['table']=="update"){
    updateNationality();
    
}else{
    addNationality();
   }


   if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['table'])) {
        if ($_GET['table'] === "update") {
            updateNationality();

        } 
    }
    } else {
        addNationality();
        
    }

    header("Location: ../dashboard.php");

?>
