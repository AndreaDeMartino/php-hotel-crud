<?php
  // Connessione db
  include __DIR__ . '/../db-con.php';

  // Check dell ID passato dalla form ($_POST "contiene" tutti i name degli input)
  if ( empty($_POST['id']) ){
    die('ID NON TROVATO');
  }

  $id_room = $_POST['id'];

  $sql = "DELETE FROM stanze WHERE id = $id_room";
  $result = $conn->query($sql);

  // Controllo se la query si è conclusa senza errori (true) e se ha prodotto record come risultati (affected_rows)
  if ($result && $conn->affected_rows > 0){
    // utilizzo di header per cambiare pagina (location) e gli passo una chiave nella querystring
    header("Location: $base_path?del=1");
  } elseif($result){
    echo 'La query non ha prodotto risultati';
  } else{
    'La query non è corretta';
  }