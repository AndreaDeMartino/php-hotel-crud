<?php 
  // Carico connessione al DB
  include __DIR__ . '/../db-con.php';

  // Richiamo funzione
  include __DIR__ . '/../functions.php';

  // Prendo room id da url
  $id_room = $_GET['id'];

  // Eseguo funzione getId
  $room = getId($conn,'stanze',$id_room);

  // Chiusura Connessione
  $conn->close();