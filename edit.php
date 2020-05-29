<?php
  //Importo Connessione a Db e query 
  include_once __DIR__ . '/partials/update/db-query_edit.php';

  // Importo Head
  include __DIR__ . '/partials/templates/head.php';
?>

<main class="container">
  <div class="row">
    <div class="col-12">

      <!-- HEADER -->
      <header>
        <h1 class="text-primary">Edit Room <?php echo $room['room_number']?></h1>
      </header>

      <!-- MAIN -->
      <main>
       <form action="./partials/update/db-query_update.php" method="post">
        <div class="form-group">
          <label for="room-number">Room Number</label>
          <input class="form-control" type="text" name="room_number" id="room_number" value="<?php echo $room['room_number']?>">
        </div>
        <div class="form-group">
          <label for="beds">Beds</label>
          <input class="form-control" type="text" name="beds" id="beds" value="<?php echo $room['beds']?>">
        </div>
        <div class="form-group">
          <label for="floor">Floor</label>
          <input class="form-control" type="text" name="floor" id="floor" value="<?php echo $room['floor']?>">
        </div>
        <div class="form-group text-right">
          <input type="hidden" name="id" value="<?php echo $room['id']?>">
          <input class="btn btn-primary" type="submit" value="Save">
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