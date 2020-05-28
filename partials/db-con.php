<?php
// Carico Credenziali di accesso
include __DIR__ . '/../env.php';

// Connessione al DB
$conn = new mysqli($server_name, $username, $password, $db_name);

// Controllo connessione al DB
if ($conn && $conn->connect_error) {
  die('Si è verificato un errore');
}