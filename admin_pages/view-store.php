    <?php
    session_start();
    if (isset($_SESSION['username'])) {

      echo '
      
      ';
    } else {
      header("Location: ../index.php?logout=notauthorized");
      exit();
    }
    include_once 'header.php';
    ?>


    <!-- END nav -->
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span> </span></p>
            <h1 class="mb-3 bread">view store</h1>
          </div>
        </div>
      </div>
    </div>


    <!-- Accordion -->


    <div class="grid-cont" id="accordion">

      <div class="q2 hrow">

        <div class="q2 hrow title">
          <div class="row-items r0"><span class="title">Equipment</span><br>name</div>
          <div class="row-items r0"><span class="title">serial number</span><br></div>
          <div class="row-items r0"><span class="title">Equipment</span><br>Price</div>
          <div class="row-items r0"><span class="title">Brand Name </span><br></div>
          <div class="row-items r0"><span class="title"> Model</span><br></div>
          <div class="row-items r0"><span class="title">Date added to store </span><br></div>
          <div class="row-items r0"><span class="title">Equipment Expiry Date </span><br></div>



        </div>

      </div>

      <div>
        <p>click on the row of the data items to see more details</p>
      </div>


      <?php

      include_once 'php/db/db.php';



      $sql = "SELECT * FROM store";

      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {

          $serial = $row["serial_no"];
          $name = $row["equipment_name"];
          $price = $row["bought_price"];
          $model = $row["model"];
          $brand = $row["brand"];
          $date_bought = $row["date_bought"];

          $expiry_date = $row["expiry_date"];

          $description = $row["description"];





          echo '

      <h3>

        <div class="q2 hrow">
          <div class="row-items r1 ">' . $name . '</div>
          <div class="row-items r0">' . $serial . '</div>
          <div class="row-items r0">' . $price . '</div>
          <div class="row-items r0">' . $brand . '</div>
          <div class="row-items r0">' . $model . '</div>
          <div class="row-items r0">' . $date_bought . '</div>
          <div class="row-items r0">' . $expiry_date . '</div>
          <div class="row-items r0">' . "-> Tap to see description" . '</div>


        </div>
      </h3>
      <div>
        <p>' . $description . ' </p>
      </div>


';
        }
      } else {
        echo
        '<div class="grid-cont">


        <div class="q2 hrow ">
        <div class="row-items"><h4> </h4> </div>
        <div class="row-items"><h4>no</h4></div>
        <div class="row-items"><h4> </h4> </div>
        <div class="row-items"><h4> data</h4> </div>
        <div class="row-items"><h4>  </h4></div>
        <div class="row-items"><h4>found   </h4></div>
        <div class="row-items"><h4>  !</h4></div>
        </div>';
      }
      ?>












</div>



      <?php
      include_once 'footer.php';
      ?>