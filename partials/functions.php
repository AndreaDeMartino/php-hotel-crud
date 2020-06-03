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


  // GET ALL RECORDS FROM A TABLE WITH INPUT ID
  function getId($conn,$table,$id){
    // Query room selezionata
    $sql = "SELECT * FROM $table WHERE id = $id";
    $result = $conn->query($sql);

    if ($conn && $result->num_rows > 0){
      $record = $result->fetch_assoc();
    } elseif ($result){
      $record = [];
    } else{
      $record = false;
    }
    // Chiusura Connessione
    $conn->close();

    return $record;
  }