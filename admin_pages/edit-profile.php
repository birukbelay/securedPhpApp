<?php
session_start();
if (isset($_SESSION['username']) ) {

	echo '
	
	';
  }
  else {
	  header("Location: ../index.php?logout=1notauthorized");
	  exit();
  }
include_once 'header.php';
?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<h1 class="mb-2 bread">Profile Page</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>profile <i class="ion-ios-arrow-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>





			<?php

			include_once 'php/db/db.php';


			$user=$_SESSION['username'];
			$sql = "SELECT * FROM users Where username='$user'";

			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				// output data of each row
				while ($row = mysqli_fetch_assoc($result)) {

					$name = $row["fname"] ." ".$row["lname"]; 
					
					$phone=$row["lname"];
					$user = $row["username"];
					$field = $row["field"];

					$photo = $row["profilePic"];
					$pic = "php/uploaded-images/" . $photo;
					$desc = $row["description"];



					echo ' 




<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row no-gutters">


				<div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url(' . $pic . ' );">                     

				</div>


				<div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
					<div class="heading-section mb-5">
						<div class="pl-md-5 ml-md-5">
							<span class="subheading">your profile</span>
							<h2 class="mb-4" style="font-size: 28px;">Your Discription</h2>
						</div>
					</div>





					<div class="pl-md-5 ml-md-5 mb-5">
						<p>' . $desc . '.</p>
						<div class="row mt-5 pt-2">
							<div class="col-lg-6">
								<div class="services-2 d-flex">

									<div class="text">
										<h3> Name</h3>
										<p>' . $name . '</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">

									<div class="text">
									
										<h3>User Name</h3>
										<p>' . $user . '</p>

									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">

									<div class="text">
										
										<h3>phone number</h3>
										<p>' . $phone . '</p>

									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">

									<div class="text">
										
										<h3>Field</h3>
										<p>' . $field . '</p>

									</div>
								</div>
							</div>
						</div>
					</div>





				</div>
				
			</div>

		</div>
</section>



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






<section class="ftco-intro" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>Use The Form Below To Edit Your Profile</h2>

			</div>

		</div>
	</div>
</section>




<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">



			<div class="col-md-6 py-5 pr-md-5">
				<div class="heading-section heading-section-white ftco-animate mb-5">
					<span class="subheading">edit</span>
					<h2 class="mb-4">edit profile
					</h2>
					<p>you can change your informations by filling the form below</p>
				</div>


				<form <?php echo 'action="php/edit/edit_profile.php?username=' . $_SESSION['username'] . '" ';?> method="post" enctype="multipart/form-data" class="appointment-form ftco-animate">
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
						
					</div>
					<div class="d-md-flex">

						
						<div class="form-group">
							<textarea name="description" id="" cols="30" rows="2" class="form-control" placeholder="your description"></textarea>
						</div>
					</div>



					<div class="d-md-flex">
						<div class="form-group ml-md-4">
							<input type="file" name="file" value="choose image" class="btn btn-dark py-3 px-4" required>
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