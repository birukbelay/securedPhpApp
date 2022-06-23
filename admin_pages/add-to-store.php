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
            <h1 class="mb-2 bread">Add items to store  Page</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="logged-page.php">controll page <i class="ion-ios-arrow-forward"></i></a></span> <span>add <i class="ion-ios-arrow-forward"></i></span>
             <span>add  items to store <i class="ion-ios-arrow-forward"></i></span></p>
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
              <h2 class="mb-4">Add sold items
                  </h2>
              <p>the fields which have * tag are neccesary to fill</p>
            </div>


            <form action="php/register/register_to_store.php" method="post" enctype="multipart/form-data" class="appointment-form ftco-animate">
              <div class="d-md-flex">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="equipment name *" required>
                </div>
                
              </div>
<!--         serial...        -->
              <div class="d-md-flex">
                
                  <div class="form-group ml-md-4">
                  <input type="text" name="price" class="form-control" placeholder="price of equipment *" required>
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="serial" class="form-control" placeholder="serial no of equipment *" required>
                </div>
                  
                
              </div>
<!--brand -->
              <div class="d-md-flex">
                <div class="form-group ml-md-4">
                  <input type="text" name="model" class="form-control" placeholder="model " >
                </div>
                <div class="form-group ml-md-4">
                  <input type="text" name="brand" class="form-control" placeholder="brand name *" required>
                </div>
                
              </div>

              
                
                
<!--               bought date expiry***-->
                <div class="d-md-flex">
                
               <div class="form-group">
		    		<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" name="bought-date" class="form-control appointment_date" placeholder="registry Date *" required>
	            		</div>
		      </div>
                    
                <div class="form-group">
		    		<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" name="expiry-date" class="form-control appointment_date" placeholder=" expire Date *" required>
	            		</div>
		      </div>
              </div> 
                
  
               
                  
<!--              desc and submit-->
                  <div class="d-md-flex">
                <div class="form-group">
                  <textarea  name="description" id="" cols="30" rows="2" class="form-control" placeholder="equipment description"></textarea>
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