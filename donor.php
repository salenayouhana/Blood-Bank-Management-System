<!DOCTYPE html>
<html>

<head>
  <title>Blood Bank</title>
  <link rel="stylesheet" href="sample.css">
</head>


<body>
<style>
        body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
        }
        
        h1 {
            text-align: left;
            font-size: 60px;
            margin-left: 10px;
            color: white;
        }
        
        form {
            margin-left: 90px;
            background-color: rgba(151, 144, 144, 0.48);
            padding: 10px;
        }

        .container {
            font-size: 25px;
            margin-left: 125px;
        }
        table, td {
            padding: 2em;
            border: 1px solid black;
            background-color: rgba(165,80,90, 0.3);

        }

        
.mycss{
    border:1px solid #000;
    padding: 10px;
    margin: 20px;
}



        
        
</style> 
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


<body>
<div style='contact-us'>
  <h1>Donor Registration</h1><br/>
    <form>
      <label>First Name: </label>
      <input type="text" name="donor_first_name"></br>
      <br>
      <label>Last Name: </label>
      <input type="text" name="donor_last_name"></br>
      <br>
        <div id="p_type">
            <label> Patient Blood Type:</label> <br>

            <label class="container">
             <input type="checkbox" id="b_type1" name="donor_blood_type" value="A+">
            <label for="b_type1"> A+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type2" name="donor_blood_type" value="A-">
            <label for="b_type2"> A- </label> <br>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type3" name="donor_blood_type" value="B+">
            <label for="b_type3"> B+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type4" name="donor_blood_type" value="B-">
            <label for="b_type4"> B- </label><br>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type5" name="donor_blood_type" value="AB+">
            <label for="b_type5">AB+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type6" name="donor_blood_type" value="AB-">
            <label for="b_type6">AB- </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type7" name="donor_blood_type" value="O+">
            <label for="b_type7"> O+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type8" name="donor_blood_type" value="O-">
            <label for="b_type8"> O- </label><br>
            </label>

        </div>
      <br>

      <label>Email: </label>
      <input type="text" name="donor_email"><br/>
      <br>
    
      <input type="submit" value="add a person">

    </form>
</div>

<div style="contact-us">
  <h1>Current List of Donors</h1><br/>

<?php 
  $servername = 'localhost';
  $username = 'my_app';
  $password = 'test';
  $db = 'blood_bank_database';
  $mysqli = new mysqli($servername, $username, $password, $db);
  // Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// insert names
if (isset($_GET['donor_first_name'])){
  // add name to database
  $insert_sql = "INSERT INTO donor (donor_first_name, donor_last_name, donor_blood_type, donor_email) 
  VALUES (\"" . $_GET['donor_first_name'] . "\" , \"" . $_GET['donor_last_name'] . "\" , \"" . $_GET['donor_blood_type'] . "\" ,\"" . $_GET['donor_email'] . "\" );";
  $result = $mysqli->query($insert_sql);
  echo "Debug: inserted into table!";
}

// delete names
if (isset($_GET['delete_id'])){
  // delete from database
  $delete_sql = "DELETE FROM donor WHERE donor_id=" . $_GET['delete_id'] . ';';
  $result = $mysqli->query($delete_sql);
  echo "Debug: deleted from table!";
}

$sql = "SELECT * FROM blood_bank_database.Donor;";
$result = $mysqli->query($sql);




 
  ?>
<!-- Retrieving Donor Info-->

<table>

<tr><th>Donor ID</th><th>Donor First Name</th><th>Donor Last Name</th><th>Donor Blood Type</th><th>Donor Email</th></tr>

<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT donor_id, donor_first_name, donor_last_name, donor_blood_type, donor_email FROM Donor ORDER BY donor_id";
$result = $conn->query($sql);

if($result)

{

while($row=mysqli_fetch_array($result))

{

echo "<tr><td>".$row['donor_id']."</td>
<td>".$row['donor_first_name']."</td>
<td>".$row['donor_last_name']."</td>
<td>".$row['donor_blood_type']."</td>
<td>".$row['donor_email']."</td>
<td>" . " <a href='?delete_id=" . $row["donor_id"] . "'>Delete</a> </p> </td>

</tr>";


}

}

?>

</table>


</div>
</body>
</html>


