<?php
  // Connect DB
  include __DIR__ . '/../db-con.php';

  // Check id
  if ( empty($_POST['id'])){
    die('ID non esistente');
  }

  $id_room = $_POST['id'];
  $room_number = $_POST['room_number'];
  $beds = $_POST['beds'];
  $floor = $_POST['floor'];

  // $sql = "UPDATE stanze 
  //         SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
  //         WHERE `id` = $id_room";

  // $result = $conn->query($sql);

  // UPDATE CON PREPARED STATEMENTS
  
  $sql = "UPDATE stanze 
          SET `room_number` = ?, `beds` = ?, `floor` = ?, `updated_at`= NOW()
          WHERE `id` = ?";

  $stmt = $conn->prepare($sql);

  $stmt->bind_param('iiii', $room_number, $beds, $floor,$id_room);

  $stmt->execute();

  if($stmt && $stmt->affected_rows > 0){
    header("location: $base_path" . "show.php?id=$id_room"); 
  } elseif($stmt){
    die('Nessun Risultato trovato');
  } else{
    die('Errore Quert');
  }
  // Chiusura Connessione
  $conn->close(); 