
<!--review-->


<?php 
    include("DBConnexion.php");

//get nationalities count

 $qr="select count(nationality) as count from nationalitys";
 $result= $conn->query($qr);

 if ($result && $row = $result->fetch_assoc()) {
     $nationality_count = $row['count'];
 } else {
     $nationality_count = 0; 
 }


//get club count

 $qr="select count(club) as count from clubs";
 $result= $conn->query($qr);

 if ($result && $row = $result->fetch_assoc()) {
     $club_count = $row['count'];
 } else {
     $club_count = 0; 
 }


//get goalkeeper count

 $qr="select count(goalkeeper_id) as count from goalkeepers";
 $result= $conn->query($qr);

 if ($result && $row = $result->fetch_assoc()) {
     $goalkeeper_count = $row['count'];
 } else {
     $goalkeeper_count = 0; 
 }


//get player count

 $qr="select count(player_id) as count from players";
 $result= $conn->query($qr);

 if ($result && $row = $result->fetch_assoc()) {
     $player_count = $row['count'];
 } else {
     $player_count = 0; 
 }

// get img 


// Check if a file was uploaded
if (isset($_FILES['profile-photo']) && $_FILES['profile-photo']['error'] == UPLOAD_ERR_OK) {


    $file_name = mysqli_real_escape_string($conn, $_FILES['profile-photo']['name']);
    $target_dir = "upload/";
    $target_file = $target_dir . basename($file_name);


    if (move_uploaded_file($_FILES['profile-photo']['tmp_name'], $target_file)) {

        $query = "INSERT INTO images (name_img, img) VALUES ('$file_name', '$target_file')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "Image uploaded and saved successfully!";
        } else {
            echo "Database error: " . mysqli_error($conn);
        }
    } else {
        echo "File upload failed!";
    }
} else {

    if (isset($_FILES['profile-photo'])) {
        echo "File upload error: " . $_FILES['profile-photo']['error'];
    } else {
        echo "No file uploaded.";
    }
}






//get player data

$qr="select player_id,nom, posiition,(nationalitys.nationality) as nationality,rating from players join nationalitys on
 nationalitys.nationality_id=players.nationality_id ";
$result= $conn->query($qr);
$playerData = $result->fetch_all(MYSQLI_ASSOC);

//get nationality data

$qr="select nationality from nationalitys";
$result= $conn->query($qr);
$nationalityData = $result->fetch_all(MYSQLI_ASSOC);

//get club data

// $qr="select club from clubs";
// $result= $conn->query($qr);
// $clubData = $result->fetch_assoc();

 ?>