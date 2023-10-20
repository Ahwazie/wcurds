<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Use 'unissalogo.png' as the brand image -->
    <a class="navbar-brand" href="#"><img src="unissalogo.png" alt="Unissa Logo" width="40" height="50"></a>

    <!-- Move the 'navbar-toggler' button here if needed -->

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </div>
    
   <!-- Add the 'Welcome' message and 'Logout' button to the right -->
   <div class="ml-auto d-flex align-items-center">
        <p class="text-light m-0 mr-2">Welcome <strong><?php echo $_SESSION['username']; ?></strong>,</p>
        <a class="btn btn-light" href="index.php?logout='1'">Logout</a>
    </div>
	
</nav>


</head>

<body>

<div class="dashboard-container">

	<button class="black-button">
        <img src="icons/student.png" alt="Icon 1" class="button-icon">
        Quality Student
    </button>
	<button class="black-button">
        <img src="icons/staff.png" alt="Icon 1" class="button-icon">
        Quality Staff
    </button>
    <button class="black-button">
        <img src="icons/facilities.png" alt="Icon 1" class="button-icon">
        Facilities/Lab Accredited
    </button>
    <button class="black-button">
        <img src="icons/postgraduates.png" alt="Icon 2" class="button-icon">
        Postgraduates/Supervision
    </button>
    

</div>


<div class="dashboard-container-2">

<button class="black-button">
        <img src="icons/research.png" alt="Icon 3" class="button-icon">
        Research/Grants
    </button>
    <button class="black-button">
        <img src="icons/books.png" alt="Icon 4" class="button-icon">
        Publications: Journal/Books
    </button>
	
	<button class="black-button">
        <img src="icons/networking.png" alt="Icon 1" class="button-icon">
        International Networking/Lingkages
    </button>
	<button class="black-button">
        <img src="icons/award.png" alt="Icon 1" class="button-icon">
        Innovation/Award
    </button>

</div>

<div class="dashboard-container-3">

	<button class="black-button">
        <img src="icons/teaching.png" alt="Icon 1" class="button-icon">
        Teaching & Learning/Programme Recognition
    </button>
	<button class="black-button">
        <img src="icons/social.png" alt="Icon 1" class="button-icon">
        Social Responsibilities/ Community Services
    </button>
    </button>
	<button class="black-button">
        <img src="icons/income.png" alt="Icon 1" class="button-icon">
        Income Generation/Endowment
    </button>
	
</div>

<div class="dashboard-container-4">

	<button class="black-button-wide-1">
        <img src="icons/settings.png" alt="Icon 1" class="button-icon">
        Settings
    </button>
	<a href="index.php?logout='1'">
    <button class="black-button-wide-2">
        <img src="icons/logout.png" alt="Icon 1" class="button-icon">
        Logout
    </button>
</a>

<div class="bottom-spacer-idk"></div>

</body>
</html>