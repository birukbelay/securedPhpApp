    
    <?php 
      include_once 'header.php';
      ?>
    
    <div class="hero-wrap" style="background-image: url('images/bg_6.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Equipments</span></p>
            <h1 class="mb-3 bread">Equipments</h1>
          </div>
        </div>
      </div>
    </div>



    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">



<?php

        include_once 'admin_pages/php/db/db.php';

        

        $sql = "SELECT * FROM items";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                    $name = $row["item_name"];
                    
                    $type = $row["type"];
                   $w = $row["waranty"];

                    $photo = $row["profilePic"];
                    $pic="admin_pages/php/uploaded-images/".$photo;
					 $desc = $row["item_description"];

                echo '

    			<div class="col-lg-6 d-flex ftco-animate div1">
    				<div class="dept d-md-flex div2">
    					<a href="department-single.html" class="img equipimg" style="background-image: url(' . $pic . ');"></a>
    					<div class="text p-4 div3">
    						<h3><a href="department-single.html">' . $name . '</a></h3>
    						<p><span class="loc">type : ' . $type . '</span></p>
    						<p><span class="doc">' .$w. ' years warranty</span></p>
    						<p class="p1d">' . $desc . ' </p>
    						<ul>
    							<li><span class="ion-ios-checkmark"></span>Waranty</li>
    							<li><span class="ion-ios-checkmark"></span>Service</li>
    							<li><span class="ion-ios-checkmark"></span>spare parts</li>
    						</ul>
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




   
    
    <?php 
      include_once 'footer.php';
      ?>