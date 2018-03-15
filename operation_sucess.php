
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Search Patients</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="images/favicon.ico"/>

    <!-- CSS
    ================================================== -->
    
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">       
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/green-theme.css" rel="stylesheet">    
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>      
    <link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative:900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
  </head>
  <body>    
    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
      <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-heartbeat"></i></a>
    <!-- END SCROLL TOP BUTTON -->

	
	
   <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <div class="container">
            <div class="navbar-header">
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->              
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.html"><i class="fa fa-heartbeat"></i><span>Surgery Department</span></a>              
              <!-- IMG BASED LOGO  -->
              <!--  <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>   -->                    
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
              
              <li class="active"><a href="index.html">Home</a></li>
              
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Doctors<span class="fa fa-angle-down"></span></a>
                  
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="about-us.html">Add</a></li>
                    <li><a href="search_doctor.php">Search</a></li>
                    
                  </ul>
              </li>    
             <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Engineers<span class="fa fa-angle-down"></span></a>
                  
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="gallery.html">Add</a></li>
                    <li><a href="search_eng.php">Search</a></li>
                    
                  </ul>
            </li>
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Patients<span class="fa fa-angle-down"></span></a>
                  
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="medical-counseling.html">Add</a></li>
                    <li><a href="search_patient.php">Search</a></li>
                    
                   </ul>
            </li>
            
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nurses<span class="fa fa-angle-down"></span></a>
                  
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="add_nurse.html">Add</a></li>
                    <li><a href="search_nurse.php">Search</a></li>
                    
                  </ul>
            </li>
			<li><a href="features.html">Devices</a></li>
			<li><a href="add_OR.html">Operation Room</a></li>
            <li><a href="contact.html">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
	
	<body>
		
		<?php



session_start();
 
    $sql = $_SESSION['sql'];
	
	
$servername = "localhost";
$username = "root";
$password = "1";
$dbname = "surgery_database";




	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "connected to DB successfully !! <br>";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


$go_back = htmlspecialchars($_SERVER['HTTP_REFERER']);
$go_home = 'index.html';
echo "<br><a href='$go_back'>Back</a> <br> <a href='$go_home'>Go HomePage</a>";


	
	?>
		
	</body>
	
</html>

