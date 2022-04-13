<!DOCTYPE html>
<html>

    <head>
    <title>Main Dash</title>
    <style>
        body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
            margin: 50px 28%;
        } 

        td,th{
            height:100px;
            width: 200px;
            justify-content:left;
            padding: 2em;
            border: 1px solid black;
            background-color: rgba(165,80,90, 0.3);
      
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

<h2> Blood Levels </h2>


<!-- Retrieving Total Number of Transfusion Bags --> 
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_total = "SELECT COUNT(*) FROM transfusionBag";
$total_result = mysqli_query($conn, $sql_total);
$total_count = mysqli_fetch_assoc($total_result)['COUNT(*)'];
echo "<b>Number of Tranfusion Bags Available </b>: ".$total_count . "<br />";
echo "<br>";
?>


<!-- Retrieving number of AB+ donations --> 
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_ab_pos_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'AB+'";
$ab_pos_total_result = mysqli_query($conn, $sql_ab_pos_total);
$ab_pos_total_count = mysqli_fetch_assoc($ab_pos_total_result)['COUNT(*)'];
echo "<b>AB+ Bags Available </b>: ".$ab_pos_total_count . "<br />";

?> 


<!-- Retrieving number of AB- donations --> 
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";


$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_ab_neg_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'AB-'";
$ab_neg_total_result = mysqli_query($conn, $sql_ab_neg_total);
$ab_neg_total_count = mysqli_fetch_assoc($ab_neg_total_result)['COUNT(*)'];
echo "<b>AB- Bags Available </b>: ".$ab_neg_total_count . "<br />";
echo "<br>";
?> 


<!-- Retrieving number of A+ donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_a_pos_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'A+'";
$a_pos_total_result = mysqli_query($conn, $sql_a_pos_total);
$a_pos_total_count = mysqli_fetch_assoc($a_pos_total_result)['COUNT(*)'];
echo "<b>A+ Bags Available </b>: ".$a_pos_total_count . "<br />";
?> 


<!-- Retrieving number of A- donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_a_neg_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'A-'";
$a_neg_total_result = mysqli_query($conn, $sql_a_neg_total);
$a_neg_total_count = mysqli_fetch_assoc($a_neg_total_result)['COUNT(*)'];
echo "<b>A- Bags Available </b>: ".$a_neg_total_count . "<br />";
echo "<br>";
?> 


<!-- Retrieving number of B+ donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_b_pos_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'B+'";
$b_pos_total_result = mysqli_query($conn, $sql_b_pos_total);
$b_pos_total_count = mysqli_fetch_assoc($b_pos_total_result)['COUNT(*)'];
echo "<b>B+ Bags Available </b>: ".$b_pos_total_count . "<br />";
?> 


<!-- Retrieving number of B- donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_b_neg_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'B-'";
$b_neg_total_result = mysqli_query($conn, $sql_b_neg_total);
$b_neg_total_count = mysqli_fetch_assoc($b_neg_total_result)['COUNT(*)'];
echo "<b>B- Bags Available </b>: ".$b_neg_total_count . "<br />";
echo "<br>";
?> 


<!-- Retrieving number of O+ donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";

$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_o_pos_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'O+'";
$o_pos_total_result = mysqli_query($conn, $sql_o_pos_total);
$o_pos_total_count = mysqli_fetch_assoc($o_pos_total_result)['COUNT(*)'];
echo "<b>O+ Bags Available </b>: ".$o_pos_total_count . "<br />";
?> 

<!-- Retrieving number of O- donations -->
<?php
$servername = "localhost";
$username = "my_app";
$password = "test";
$db = "blood_bank_database";


$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql_o_neg_total = "SELECT COUNT(*) FROM donor WHERE donor_blood_type = 'O-'";
$o_neg_total_result = mysqli_query($conn, $sql_o_neg_total);
$o_neg_total_count = mysqli_fetch_assoc($o_neg_total_result)['COUNT(*)'];
echo "<b>O- Bags Available </b>: ".$o_neg_total_count . "<br />";
echo "<br>";
?> 

<!-- Retrieving Hospital Info-->

<table>

<tr><th>Hospital ID</th><th>Hospital Name</th><th>Hospital Street Adress</th><th>Hospital City</th><th>Hospital State</th><th>Hospital Zip</th></tr>

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

$sql = "SELECT hospital_id, hospital_name,hospital_street_address, hospital_city, hospital_state, hospital_zip FROM Hospital ORDER BY hospital_id ASC";
$result = $conn->query($sql);

if($result)

{

while($row=mysqli_fetch_array($result))

{

echo "<tr><td>".$row['hospital_id']."</td>
<td>".$row['hospital_name']."</td>
<td>".$row['hospital_street_address']."</td>
<td>".$row['hospital_city']."</td>
<td>".$row['hospital_state']."</td>
<td>".$row['hospital_zip']."</td>
</tr>";

}

}

?>

</table>



</body>
    </html>