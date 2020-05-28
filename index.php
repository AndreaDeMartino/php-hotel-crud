<?php
  //Importo Connessione a Db e query 
  include __DIR__ . '/partials/home/db-query.php';

  // Importo Head
  include __DIR__ .'/partials/templates/head.php';
?>

<main class="container">
  <div class="row">
    <div class="col-12">

      <!-- HEADER -->
      <header>
        <h1 class="text-primary">Hotel Rooms</h1>
      </header>

      <!-- MAIN -->
      <main>
        <table class="table">

          <!-- Intestazione Tabella -->
          <thead>
            <th>ID</th>
            <th>Number</th>
            <th>Floor</th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </thead>

          <!-- Corpo Tabella -->
          <tbody>
            <?php // Loop su dati Db
              if( !empty($rooms) ){
                foreach($rooms as $room){ ?>
                  <tr>
                    <td><?php echo $room['id']?></td>
                    <td><?php echo $room['room_number']?></td>
                    <td><?php echo $room['floor']?></td>
                    <td>
                      <a class="text-success" href="show.php?id=<?php echo $room['id']; ?>">View</a>
                    </td>
                    <td>
                      <a class="text-primary" href="">Update</a>
                    </td>
                    <td>
                      <a class="text-danger" href="">Delete</a>
                    </td>
                  </tr>  
                <?php }
              }
            ?>
          </tbody>

        </table>
      </main>
    </div>
  </div>
</main>

<?php 
  // Import del footer che contiene anche il file JS
  include __DIR__ . '/partials/templates/footer.php';
?>