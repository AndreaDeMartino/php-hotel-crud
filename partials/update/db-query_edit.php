<?php
  // Connect DB
  include __DIR__ . '/../db-con.php';

  // Prendo id per edit
  if( !empty($_GET['id']) ){
    $id_room = $_GET['id'];

    // Query
    $sql = "SELECT * FROM stanze WHERE id = $id_room";
    $result = $conn->query($sql);

    if($result && $result->num_rows > 0){
      $room = $result->fetch_assoc();
    } else {
      die('Id non esistente');
    }

  } else{
    die('Impossibile ottenere la stanza da editare');
  }

  // Chiusura Connessione
$conn->close();