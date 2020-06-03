<?php 
  // Carico connessione al DB
  include __DIR__ . '/../db-con.php';
  // Richiamo Funzioni
  include __DIR__ . '/../functions.php';

  $rooms = getAll($conn, 'stanze');

  // // Ottieni lista stanze hotel
  // $sql = "SELECT * FROM stanze";
  // $result = $conn->query($sql);


  // if ($result && $result->num_rows > 0){
  //   $rooms = [];
  //   // Ciclo con fetch_assoc i risultati e li inserisco uno alla volta nell'array rooms
  //   while( $row = $result->fetch_assoc() ){
  //     $rooms[] = $row;
  //   }
  // } else if ($result){
  //     echo 'Nessun risultato';
  // } else {
  //     echo 'Query errata';
  // };
  // // Chiusura Connessione
  // $conn->close();