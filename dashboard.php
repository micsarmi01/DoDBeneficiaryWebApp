<?php

session_start();



if(!isset($_SESSION['username'])){

header("Location: login.html");

}


?>

<!DOCTYPE html>
<html>
<head>
    <title>DoD Beneficiary Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
        <nav>
        <a  id="navlinks" href="dashboard.php"><img src="img/dashboard.png" width="35" height="35"></a>
		<a  id="navlinks" href="familySignup.php"> &nbsp; Add a Family Member&nbsp; </a>
		<a  id="navlinks" href="family.php"> &nbsp;Family Page&nbsp; </a>
		<a  id="navlinks" href="profile.php"> &nbsp;Profile&nbsp; </a>
        <a  id="logout" href="includes/logout.php"> (Logout: <?=$_SESSION['username']?>) &nbsp;  </a>
		</nav>
    
       <script>
      $(function() {
        $( "#accordion" ).accordion({
      heightStyle: "content"
        });
      });
      </script>
    
</head>
<body>
    <br><br><br>
    <div id="profilePicDash">
        
    
    <?php

     

      echo "<img  width='150' height='175' src=img/profile/" . $_SESSION['username'] . "/" . $_SESSION['profilePictureDir'];
       

      ?>
        </div>
    
    
    <div>
       <h1> DoD Benefits Dash </h1>  
    </div>
	
    

    <div id="accordion">
        <h3> Welcome <?=$_SESSION['username']?>!</h3>
        <p> Choose a required document.</p>
        <h3> Edit Personal Information</h3>
        <p> PUT EDIT STUFF HERE</p>
        <h3>Profile Picture</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadProfilePic.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload Profile" name="uploadProfilePic"/>

      </form>

      <?php

      if(empty($_SESSION['profilePictureDir'])){

      echo "<img width='500' height='400' src='img/Sample-ID.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img width='500' height='400' src=img/profile/" . $_SESSION['username'] . "/" . $_SESSION['profilePictureDir'];
       }

      ?>
    </p>
  </div>
  <h3>ID Card</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadID.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload ID Card" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['IDCardImg'])){

      echo "<img width='500' height='400' src='img/Sample-ID.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img width='500' height='400' src=img/id/" . $_SESSION['username'] . "/" . $_SESSION['IDCardImg'];
       }

      ?>
    </p>
  </div>
  <h3>Birth Certifcate</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadBirthCert.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload Birth Certificate" name="uploadForm"/>

      </form>

      <?php

      if(empty($_SESSION['birthCertificateImg'])){

      echo "<img width='500' height='400' src='img/birthCertificate.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img width='500' height='400' src=img/birthCertificates/" . $_SESSION['username'] . "/" . $_SESSION['birthCertificateImg'];
       }

      ?>
    </p>
  </div>
    
  <h3>Form</h3>
  <div>
    <p>
    <!-- user can upload documents to the database -->
      <form method="post" action="includes/uploadForm.php" enctype="multipart/form-data">

      Select image: <input type="file" name="fileName" />

      <input type="submit"  value="Upload Form" name="uploadForm"/>

      </form>
    
      <?php

      if(empty($_SESSION['formImg'])){

      echo "<img width='500' height='400' src='img/form.jpg' alt='Unknown user' ></img>";

      } else{

      // display user's profile picture

      echo "<img width='500' height='400' src=img/form/" . $_SESSION['username'] . "/" . $_SESSION['formImg'];
       }

      ?>
    </p>
   
  </div>
  
</div>
    
		
		
    
</body>
</html>