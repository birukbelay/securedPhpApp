<?php 
	session_start();
	if (!isset ($_SESSION['username'])  ) {
		header("Location: ../index.php?login=notauthorized");
		exit();
		
	  }
	  else {
		  if(!isset($_SESSION['role']) ){
			header("Location: logged-page.php?login=notauthorized");
			exit();
		  }else{
			  echo '';
		  }
		 
	  }
    include_once 'header.php';
?>     
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Add Admin page</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="logged-page.php">controll page <i class="ion-ios-arrow-forward"></i></a></span> <span>add <i class="ion-ios-arrow-forward"></i></span>
             <span>add Admin <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    
    
  
    
 

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row">
                
                
                
        <div class="col-md-6 py-5 pr-md-5">
            <div class="heading-section heading-section-white ftco-animate mb-5">
              <span class="subheading">add</span>
              <h2 class="mb-4">Add Admin
                  </h2>
              <p>you can add Admins by filling the form below</p>
            </div>


            <form action="php/register/register_admin.php" method="post" enctype="multipart/form-data" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
              <div class="d-md-flex">
                
                <div class="form-group ml-md-4">
                  <input type="text" name="username" class="form-control" placeholder="user name" required>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                </div>
              </div>

              <div class="d-md-flex">
                
                <div class="form-group ml-md-4">
                  <input type="password" name="password" class="form-control" placeholder="password" required>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="field" class="form-control" placeholder="field of admin" required>
                </div>
              </div>

              <div class="d-md-flex">
                
                
                <div class="form-group">
                  <textarea  name="description" id="" cols="30" rows="2" class="form-control" placeholder="description"></textarea>
                </div>
              </div>
              
                  
              
                  <div class="d-md-flex">
                 <div class="form-group ml-md-4">
                  <input type="file" name="file" value="" class="btn btn-dark py-3 px-4" >
                </div>
                <div class="form-group ml-md-4">
                  <input name="submit" type="submit" value="finish" class="btn btn-secondary py-3 px-4">
                </div>
          </div>
                  
            </form>






          </div>
                
                
                
          <div class="col-lg-6 p-5 bg-counter aside-stretch">

        
          </div>

        </div>
      </div>
    </section>

<!--      footer-->
  
    <?php 
    include_once 'footer.php';
?>      