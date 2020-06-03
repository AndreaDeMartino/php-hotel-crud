<?php

  //GET ALL RECORDS FROM A DB TABLE
  function getAll($conn, $table){
    // Ottieni lista stanze hotel
    $sql = "SELECT * FROM $table";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0){
      $records = [];
      // Ciclo con fetch_assoc i risultati e li inserisco uno alla volta nell'array rooms
      while( $row = $result->fetch_assoc() ){
        $records[] = $row;
      }
    } else if ($records){
        $records = [];
    } else {
        $records = false;
    };
    // Chiusura Connessione
    $conn->close();

    return ($records);
  };