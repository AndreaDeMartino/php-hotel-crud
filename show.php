<?php
  //Importo Connessione a Db e query 
  include __DIR__ . '/partials/show/db-query.php';

  // Importo Head
  include __DIR__ .'/partials/templates/head.php';
?>

<main class="container">
  <div class="row">
    <div class="col-12">

      <!-- HEADER -->
      <header>
        <h1 class="text-primary">Details Room <?php echo $room['room_number']?></h1>
      </header>

      <!-- MAIN -->
      <main>
        <div class="card mb-5">
          <ul class="list-group">
            <li class="list-group-item">ID: <?php echo $room['id']?></li>
            <li class="list-group-item">ROOM NUMBER: <?php echo $room['room_number']?></li>
            <li class="list-group-item">BEDS: <?php echo $room['beds']?></li>
            <li class="list-group-item">FLOOR: <?php echo $room['floor']?></li>
            <li class="list-group-item">CREATED AT: <?php echo $room['created_at']?></li>
            <li class="list-group-item">UPDATED AT: <?php echo $room['updated_at']?></li>
          </ul>
        </div>
       
        <a class="btn btn-primary" href=" <?php echo $base_path ?>edit.php?id=<?php echo $room['id']?>">Edit</a>
      </main>

    </div>
  </div>
</main>

<?php 
  // Import del footer che contiene anche il file JS
  include __DIR__ . '/partials/templates/footer.php';
?>