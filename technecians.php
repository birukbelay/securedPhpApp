    
    <?php 
      include_once 'header.php';
      ?>
    <!-- END nav -->
    


    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Experts</span></p>
            <h1 class="mb-3 bread">Well Experienced Profesionals</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">


<?php

        include_once 'admin_pages/php/db/db.php';

        

        $sql = "SELECT * FROM users WHERE role=1;";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row["fname"]. " ".$row["lname"];
                    
                    $phone = $row["phone"];
                     $field = $row["field"];

                    $photo = $row["profilePic"];
               		$pic="admin_pages/php/uploaded-images/".$photo;
                    $desc = $row["description"];



 echo '
        	<div class="col-md-6 col-lg-3 ftco-animate">
	          <div class="block-2">
	            <div class="flipper">
	              <div class="front" style="background-image: url(' . $pic . ');">
	                <div class="box">
	                  <h2>' . $name . '</h2>
	                  <p>' . $field . ' </p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote class="ptd">
	                  <p class="p1d">&ldquo;' . $desc . '&rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image mr-3 align-self-center">
	                    <div class="img" style="background-image: url(' . $pic . ');"></div>
	                  </div>
	                  <div class="name align-self-center">phone <span class="position">' . $phone . ' </span></div>
	                </div>
	              </div>
	            </div>
	          </div> <!-- .flip-container -->
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





	        






        </div>
        
    	</div>
    </section>
		
	    
    <?php 
      include_once 'footer.php';
      ?>