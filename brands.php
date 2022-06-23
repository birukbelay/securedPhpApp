  <?php 
      include_once 'header.php';
      ?>
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
            <h1 class="mb-3 bread">About Us</h1>
          </div>
        </div>
      </div>
    </div>

  
  <?php

        include_once 'admin_pages/php/db/db.php';

        

        $sql = "SELECT * FROM brand";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row["brand_name"];
                    
                    $country = $row["country"];
                    

                    $photo = $row["profilePic"];
                    $pic="admin_pages/php/uploaded-images/".$photo;
                    $desc = $row["brand_description"];
                   

                echo ' 


    <section class="ftco-section testimony-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">our brands</h2>
          </div>
        </div>



      
        <div class="row">


        	<div class="col-md-12 ftco-animate">
            <div class="carousel-testimony owl-carousel">




              <div class="item">
                <div class="testimony-wrap text-center">
                  <div class="user-img mb-5" style="background-image: url(' . $pic . ')">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">' . $desc . '</p>
                    <p class="name">' . $name . '</p>
                    <span class="position">' . $country . '</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></div></section>
             
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
		
  <?php 
      include_once 'footer.php';
      ?>