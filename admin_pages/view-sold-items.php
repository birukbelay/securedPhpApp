    <?php 
    session_start();
    if (isset($_SESSION['username']) ) {

      echo '
      
      ';
    }
    else {
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
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>   </span></p>
            <h1 class="mb-3 bread">view sold items</h1>
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
    <div class="row-items r0"><span class="title">equipment</span><br>price</div>
    <div class="row-items r0"><span class="title">brand name </span><br></div>
    <div class="row-items r0"><span class="title"> region</span><br>name</div>
    <div class="row-items r0"><span class="title">faculty name </span><br></div>
    <div class="row-items r0"><span class="title">installed date </span><br></div>
    <div class="row-items r0"><span class="title"> contact person name</span><br></div>

  
            </div>
    
    </div>

	<div> 
<p>click on the row of the data items to see more details</p>
</div>
    
    
    <?php

        include_once 'php/db/db.php';

        

        $sql = "SELECT * FROM sold_items";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {

                    $serial = $row["serial_no"];
                    $name = $row["equipment_name"];
                    $price = $row["sold_price"];
                    $model = $row["model"];
                    $brand = $row["brand"];
                    $channel = $row["channel"];
                    $contact_name = $row["contact_person_name"];
                    $contact_phone = $row["contact_person_phone"];
                    $installed_date = $row["installed_date"];
                    $waranty = $row["waranty_expired_date"];
                    $region = $row["region"];
                    $expiry_date = $row["expiry_date"];
                    $faculty_name = $row["faculity_name"];
                    $faculty_phone = $row["faculity_phone"];
                    $installer_name = $row["installer_name"];
                    $installer_phone = $row["installer_phone"];
                    $description = $row["equipment_description"];


               


                echo '  <h3>

<div class="q2 hrow">
    <div  class="row-items r1 ">' . $name . '</div>
    <div class="row-items r0">' . $serial . '</div>
    <div class="row-items r0">' . $price . '</div>
    <div class="row-items r0">' . $brand . '</div>
    <div class="row-items r0">' . $region . '</div>
    <div class="row-items r0">' . $faculty_name . '</div>
    <div class="row-items r0">' . $installed_date . '</div>
    <div class="row-items r0">' . $contact_name . '</div>
   
   
</div>
</h3>
    <div>
<div class="q2 hrow">
     <div class="row-items r0"><span class="title">Equipment name</span><br>' . $serial . '</div>
    <div class="row-items r0"><span class="title">sereal number</span><br>' . $name . ' </div>
    <div class="row-items r0"><span class="title">equipment price</span><br>' . $price . '</div>
     <div class="row-items r0"><span class="title">model </span><br>' . $model . '</div>
    <div class="row-items r0"><span class="title">brand  </span><br>' . $brand . '</div>
    <div class="row-items r0"><span class="title">channel</span><br>' . $channel . '</div>
     <div class="row-items r0"><span class="title"> contact person name</span><br>' . $contact_name . '</div>
     <div class="row-items r0"><span class="title"> contact person phone</span><br>' . $contact_phone . '</div>

      <div class="row-items r0"><span class="title">equipment description </span><br>' . $description . '</div>


   <div class="row-items r0"><span class="title">date of instalation </span><br>' . $installed_date . '</div>
    <div class="row-items r0"><span class="title">waranty expiry date </span><br>' . $waranty . '</div>
    <div class="row-items r0"><span class="title"> region </span><br>' . $region . '</div>
     <div class="row-items r0"><span class="title">equipment expiry date </span><br>' . $expiry_date . '</div>
    <div class="row-items r0"><span class="title">faculty name </span><br>' . $faculty_name . '</div>
     <div class="row-items r0"><span class="title">faculty phone number </span><br>' . $faculty_phone . '</div>
      <div class="row-items r0"><span class="title">installer name </span><br>' . $installer_name . '</div>
    <div class="row-items r0"><span class="title">installer phone </span><br>' . $installer_phone . '</div>
    
    
</div>   
    </div>';

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