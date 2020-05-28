<?php 
// Carico connessione al DB
include __DIR__ . '/../db-con.php';


// Prendo room id da url
$id_room = $_GET['id'];

// Query room selezionata
$sql = "SELECT * FROM stanze WHERE id = $id_room";
$result = $conn->query($sql);


if ($conn && $result->num_rows > 0){
  $room = $result->fetch_assoc();
} elseif ($result){
  echo 'Nessun Risultato';
} else{
  echo 'Errore Query';
}


// Chiusura Connessione
$conn->close();