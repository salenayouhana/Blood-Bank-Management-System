<html>
    <head>
    <!DOCTYPE html>
<html>

<h2> Search for a Donor </h2>
<head>
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

</body>
</html>
    <style>
        body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
            margin: 50px 28%;
        }
        
        form {
            background-color: rgb(202, 93, 87);
            width: 700px;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        input {
            all: unset;
            font: 16px system-ui;
            color: #fff;
            height: 100%;
            width: 100%;
            padding: 6px 10px;
        }
        
         ::placeholder {
            color: #fff;
            opacity: 0.7;
        }
        
        button {
            all: unset;
            cursor: pointer;
            width: 44px;
            height: 44px;


        }

        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #666;
  }
  
  li {
    float: left;
  }
  
  li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
  }
  
  /* Change the link color to #111 (black) on hover */
  li a:hover {
    background-color: #111;
  }
    </style>
    </head>
<body>

<form action="donorsearch.php" method="post">
Search <input type="text" name="search"><br>

By: <select name="column">
    <option value="donor_id">id</option>
	<option value="donor_first_name">Donor First Name</option>
	<option value="donor_last_name">Donor Last Name </option>
    <option value="donor_blood_type">Donor Blood Type </option>
    <option value="event_name">Event Donor Attended </option>
	</select><br>
<input type ="submit">
</form>

<?php

error_reporting(0);

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";


$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from donor where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
    
    echo "<b>Donor ID</b>: ". $row['donor_id'] . "<br />"; 
                echo "<b>Donor First Name</b>: ". $row['donor_first_name'] . "<br />";
                echo "<b>Donor Last Name</b>: ". $row['donor_last_name'] . "<br />"; 
                echo "<b>Donor Blood Type</b>: ". $row['donor_blood_type'] . "<br />";
                echo "<b>Event Attended </b>: ". $row['event_name'] . "<br />"; 
                echo "<br>";
}
} else {
	echo "No Records Found";
}

$conn->close();

?>

</body>
</html>