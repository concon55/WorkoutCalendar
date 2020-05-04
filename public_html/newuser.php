<!DOCTYPE html>
<html>
<head>
	<title>Workout Calendar</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
  <style>
    #newaccount{
      text-align: center;
    }
  </style>
</head>
<body>
	
	<div class="header">
      <?php //if logged in
        if(isset($_COOKIE['firstname']) && isset($_COOKIE['lastname'])){
      ?>

      	<a class="logout" href="logout.php">Log Out</a>

      <?php 
          print "<h1>Welcome to your Workout Calendar, ".ucfirst($_COOKIE['firstname']) ." ". ucfirst($_COOKIE['lastname']). "!</h1>";
          print "<p id='newaccount'>Your account has been created.</p>";
        }else{
          header('Location: index.php');
        }
      ?>
  
    </div>

	
    
</body>
</html>