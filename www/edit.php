<?php
require_once ("database.php");

$database = new Database();

$id = $_GET["id"];

$trail = $database->getTrailId($id);

?>
<html>
<header>
    <title>Edit your activity</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/formMain.css">
</header> 
<body>

<div class="container-contact100">
	<div class="wrap-contact100">

		<!--Beginning of the form===============================================================================================-->
    <form action="processupdate.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data" class="contact100-form validate-form abc">
      <span class="contact100-form-title">
          Edit your activity!
      </span>
      <!--Title--===============================================================================================-->
      <div class="wrap-input100 validate-input" data-validate="Title is required">
        <span class="label-input100">Title</span>
        <input class="input100" type="text" id="nameActivity" name="title" value="<?php echo $trail->getTitle();?>"><br><br>
        <span class="focus-input100"></span>
      </div>
    	<!--Name--===============================================================================================-->
      <div class="wrap-input100 validate-input" data-validate = "Name is required">
			  <span class="label-input100">Name</span>
        <input class="input100" type="text" id="nameAuthor" name="name" value="<?php echo $trail->getName();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
		  <!--Image--===============================================================================================-->
      <div class="wrap-input100 validate-input" data-validate="An image is required">
			  <span class="label-input100">Upload your image</span>
        <input class="input100" type="file" id="imgActivity" name="file" value="<?php echo $trail->getPhoto();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
      <!--Starting point--===============================================================================================-->
      <div class="wrap-input100 validate-input" data-validate="An image is required">
				<span class="label-input100">Starting point</span>
        <input class="input100" type="text" id="Start" name="startingpoint" value="<?php echo $trail->getStartingPoint();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
      <!--Ending point--===============================================================================================-->
      <div class="wrap-input100 validate-input" data-validate="Ending point is required">
				<span class="label-input100">Ending point</span>
        <input class="input100" type="text" id="End" name="endingpoint" value="<?php echo $trail->getEndingPoint();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
      <!--Postal code--===============================================================================================-->    
      <div class="wrap-input100 validate-input" data-validate="Postal code is required">
				<span class="label-input100">Postal code</span>
        <input class="input100" type="text" id="Postal" name="postalcode" value="<?php echo $trail->getPostalCode();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
      <!--City--===============================================================================================-->    
      <div class="wrap-input100 validate-input" data-validate="City is required">
				<span class="label-input100">City</span>
        <input class="input100" type="text" id="city" name="city" value="<?php echo $trail->getCity();?>"><br><br>
        <span class="focus-input100"></span>
			</div>
      <!--Country--===============================================================================================-->    
      <div class="wrap-input100 validate-input" data-validate="Country is required">
				<span class="label-input100">Country</span>
        <input class="input100" type="text" id="country" name="country" value="<?php echo $trail->getCountry();?>"><br><br>
        <span class="focus-input100"></span>
			</div>

      <!--Description--===============================================================================================-->    
      <div class="wrap-input100 validate-input" data-validate = "description is required">
				<span class="label-input100">Description</span>
        <textarea class="input100" name="description" rows="5" cols="40" value="<?php echo $trail->getDescription();?>"></textarea><br>
        <span class="focus-input100"></span>
			</div>
      <!--Button===============================================================================================-->
      <div class="container-contact100-form-btn">
							<div class="wrap-contact100-form-btn">
								<div class="contact100-form-bgbtn"></div>
								<button name="submit" class="contact100-form-btn">
									<span>
										Submit
										<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
									</span>
								</button>
							</div>
            </div>    
    </form>
		<!--End of form===============================================================================================-->

	</div>
</div>

<div id="dropDownSelect1"></div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>   
</html>