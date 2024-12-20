<?php

 include("DBConnexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['table'])) {
        if ($_GET['table'] === "updatePlayer") {
           

            $qr = "SELECT * FROM players WHERE player_id='" . $_GET['id'] . "'";
            $result = mysqli_query( $conn, $qr);;
            $playerDataToForm = mysqli_fetch_assoc($result);

            echo'<script>
            document.getElementById("modal-task").classList.remove("hidden")

            document.getElementById("player-name").value="'.$playerDataToForm['nom'].'"
            document.getElementById("player-photo").value="'.$playerDataToForm['id_img'].'"
            document.getElementById("Position").value="'.$playerDataToForm['posiition'].'"
            document.getElementById("player-nationality").value="'.$playerDataToForm['nationality_id'].'"
            document.getElementById("player-club").value="'.$playerDataToForm['club_id'].'"
            document.getElementById("player-rating").value="'.$playerDataToForm['rating'].'"
            document.getElementById("player-pace").value="'.$playerDataToForm['pace'].'"
            document.getElementById("player-shooting").value="'.$playerDataToForm['shooting'].'"
            document.getElementById("player-passing").value="'.$playerDataToForm['pasing'].'"
            document.getElementById("player-dribbling").value="'.$playerDataToForm['dribbling'].'"
            document.getElementById("player-defending").value="'.$playerDataToForm['defending'].'"
            document.getElementById("player-physical").value="'.$playerDataToForm['physical'].'"
            </script>';

            
        }
    }
}
?>