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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Add Equipments page</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="logged-page.php">controll page <i class="ion-ios-arrow-forward"></i></a></span> <span>add <i class="ion-ios-arrow-forward"></i></span>
             <span>add Equipments <i class="ion-ios-arrow-forward"></i></span></p>
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
              <h2 class="mb-4">Add equipments
                  </h2>
              <p>fields which have the * sign are required</p>
            </div>


        <form action="php/register/register_items.php" method="post" enctype="multipart/form-data" class="appointment-form ftco-animate">
            
            
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="equipment name *" required>
                </div>
                <div class="form-group">
                  <input type="text" name="type" class="form-control" placeholder="equipment type" >
                </div>
               
              </div>
            
            

              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="waranty" class="form-control" placeholder="Addd waranty years in number only" >
                </div>
                
                
              </div>

              <div class="d-md-flex">
                
                
                <div class="form-group">
                  <textarea  name="description" id="" cols="30" rows="2" class="form-control" placeholder="add description"></textarea>
                </div>
              </div>
              
                  
              
                 <div class="d-md-flex">
                 <div class="form-group ml-md-4">
                  <input type="file" name="file" value="pick image" class="btn btn-dark py-3 px-4" required>
                </div>
                
                 <div class="d-md-flex">
               
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