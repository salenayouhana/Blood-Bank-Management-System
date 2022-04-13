

<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>THIS IS THE ADMIN HOME PAGE</h2><?php echo $_SESSION["username"] ?>

<a href="logout.php">Logout</a>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
  <title>Blood Bank</title>
  <link rel="stylesheet" href="sample.css">
</head>
<style>
        body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
        }
        
        h1 {
            text-align: center;
            font-size: 60px;
            margin-left: 10px;
            color: white;
        }
        
        form {
            margin-left: 90px;
            background-color: rgba(151, 144, 144, 0.48);
            padding: 10px;
        }
        
        div {
            vertical-align: middle;
            height: 60px;
            width: 500px;
            text-align: left;
            font-size: 30px;
        }

        #bbms {
          text-align: center;
        }
    </style>


<body>
<header id="page_header" class="page_header">
            
            <nav id="nav_bar_responsive" class="nav_bar"> 
                <menu class="menu">
                    <ul>
                        <li><a href="adminhome.php">Home</a></li>
                        <li><a href="donor.php">Donor Registration</a></li>
                        <li><a href="patient.php">Patient Registration</a></li>
                        <li><a href="update.php">Donor Update</a></li>
                        <li><a href="patientupdate.php">Patient Update</a></li>
                        <li><a href="donorsearch.php">Donor Search</a></li>
                        <li><a href="searchoption.php">Patient Search</a></li>
                        <li><a href="event.php">Events</a></li>
                        <li><a href="staff.php">Staff</a></li>
                        <li><a href="updateinventory.php">Inventory</a></li>
                        <li><a href="home.php">Blood Levels</a></li>
                    </ul>
                </menu>
            </nav>
            <h1>Blood Bank Management System</h1>
        </header>
        <img src="bloodpic.png" width="400" height="350" class="center"/>
        <p id="bbms">Welcome to our Blood Bank Management System! </p>
</body>
</html>




