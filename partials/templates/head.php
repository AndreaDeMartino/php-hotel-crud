<?php
  include_once __DIR__ . '/../../env.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'/>
  <link rel="stylesheet" href="<?php echo $base_path ?>/dist/style/app.css">
  <title>Bool Hotel</title>
</head>

<body>

  <header class="header">
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Boolean hotel</a>

      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href=" <?php echo $base_path ?>">
            Tutte le stanze
          </a>
        </li>
      </ul>
    </nav>
  </header>