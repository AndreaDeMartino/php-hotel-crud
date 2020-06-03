<?php
  //Importo Connessione a Db e query 
  // include_once __DIR__ . '/partials/update/db-query_edit.php';

  // Importo Head
  include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
  <div class="row">
    <div class="col-12">

      <!-- HEADER -->
      <header>
        <h1 class="text-primary">Create New Room <?php echo $room['room_number']?></h1>
      </header>

      <!-- MAIN -->
      <main>
       <form action="<?php echo $base_path ?>partials/create/db-query.php" method="post">
        <div class="form-group">
          <label for="room-number">Room Number</label>
          <input class="form-control" type="number" name="room_number" id="room_number" value="">
        </div>
        <div class="form-group">
          <label for="beds">Beds</label>
          <input class="form-control" type="number" name="beds" id="beds" value="">
        </div>
        <div class="form-group">
          <label for="floor">Floor</label>
          <input class="form-control" type="number" name="floor" id="floor" value="">
        </div>
        <div class="form-group text-right">
          <input class="btn btn-primary" type="submit" value="Create">
        </div>
       </form>
      </main>

    </div>
  </div>
</main>

<?php 
  // Import del footer che contiene anche il file JS
  include __DIR__ . '/partials/templates/footer.php';
?>