<?php 
  // Carico connessione al DB
  include __DIR__ . '/../db-con.php';
  // Richiamo Funzioni
  include __DIR__ . '/../functions.php';
  
  // Eseguo funzione getId
  $rooms = getAll($conn, 'stanze');