
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

// insert img to the dataBase and store it in the upload folder------------------- 

function uploadImg($inputName){
    include("DBConnexion.php");
if (isset($_FILES[$inputName]) && $_FILES[$inputName]['error'] == UPLOAD_ERR_OK) {

    $file_name = mysqli_real_escape_string($conn, $_FILES[$inputName]['name']);
    $target_dir = "upload/";
    $target_file = $target_dir . basename($file_name);

    $check_query = "SELECT * FROM images WHERE name_img = '$file_name'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        return;
    } else {
        if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $target_file)) {

            $query = "INSERT INTO images (name_img, img) VALUES ('$file_name', '$target_file')";
            $result = mysqli_query($conn, $query);

        } else {
            echo "File upload failed!";
        }
    }
} 
}

uploadImg('profile-photo');



//get player data

$qr="select player_id,nom, posiition,(nationalitys.nationality) as nationality,rating,images.img,club from players join nationalitys on
 nationalitys.nationality_id=players.nationality_id join images on images.id_img=players.id_img join clubs on clubs.club_id=players.club_id ";
$result= $conn->query($qr);
$playerData = $result->fetch_all(MYSQLI_ASSOC);

//get golkeper data

$qr="select goalkeeper_id,nom, posiition,(nationalitys.nationality) as nationality,rating,(images.img) as img,(clubs.club) as club from goalkeepers join nationalitys on
 nationalitys.nationality_id=goalkeepers.nationality_id join images on images.id_img=goalkeepers.id_img join clubs on clubs.club_id=goalkeepers.club_id";
$result= $conn->query($qr);
$goalkeeperData = $result->fetch_all(MYSQLI_ASSOC);

//get nationality data

$qr="select * from nationalitys";
$result= $conn->query($qr);
$nationalityData = $result->fetch_all(MYSQLI_ASSOC);

//get club data

$qr="select club_id,club,(images.img) as img from clubs join images on images.id_img=clubs.id_img";
$result= $conn->query($qr);
$clubData = $result->fetch_all(MYSQLI_ASSOC);

//get img data

$qr="select * from images";
$result= $conn->query($qr);
$imgData = $result->fetch_all(MYSQLI_ASSOC);

 ?>