  <?php 
      include_once 'header.php';
      ?>
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread">Blog</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
          </div>
        </div>



        <div class="row d-flex">


<?php

        include_once 'admin_pages/php/db/db.php';

        

        $sql = "SELECT * FROM hospitals";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row["hospital_name"];
                    $region= $row["region"];
                    
                    $adress = $row["faculity_adress"];
                    $phone = $row["hospital_phone"];


                    $photo = $row["profilePic"];
                  $pic="admin_pages/php/uploaded-images/".$photo;
                $desc = $row["hospital_description"];

                echo '
          <div class="col-md-6 ftco-animate div1">
            <div class="blog-entry align-self-stretch d-flex">
              <a href="faculties.php" class="block-20 order-md-last" style="background-image: url('. $pic .');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  <div><a href="#"> ' . $region . '</a></div>
                  <div><a href="#">region</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-3"><a href="#"> ' . $name . '</a></h3>
                <p class="p1d">' . $desc .'</p>
              </div>
            </div>
          </div>

';

             }
        } else {
          
          echo '<div class="grid-cont">
    
    
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


        
        
    </section>
		
  <?php 
      include_once 'footer.php';
      ?>