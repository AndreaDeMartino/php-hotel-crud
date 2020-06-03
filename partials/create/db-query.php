<?php
// Include Db
include __DIR__ . '/../db-con.php';

// Check se mancano parametri in input per il create
if (empty($_POST['room_number']) || empty($_POST['beds']) || empty($_POST['floor']) ){
  die('Mancano parametri');
}

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// Query inserimento nuova stanza
$sql = "INSERT INTO `stanze` (`room_number`, `beds`, `floor`, `created_at`, `updated_at`)
        VALUES (?, ?, ?, NOW(),NOW());";

$stmt = $conn->prepare($sql);
$stmt->bind_param('iii', $room_number, $beds, $floor);
$stmt->execute();

if($stmt && $stmt->insert_id){
  $id_room = $stmt->insert_id;
  header("Location: $base_path". "show.php?id=$id_room");
} else{
  die('Creazione Stanza Errata');
}