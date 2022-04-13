<!DOCTYPE html>
<html> 

<link rel="stylesheet" href="sample.css">
<style>
        body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
            margin: 50px 28%;
        } 

        table, td {
            padding: 2em;
            border: 1px solid black;
            background-color: rgba(165,80,90, 0.3);

        }

        h1 {
            font-size: 20pt
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

<body>

<head> 
        <h1>Updating Inventory</h1>
</head>

<table>

<tr><th>Transfusion Bag ID</th><th>Donor ID</th><th>Nurse ID</th><th>Patient ID</th></tr>

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
 


$trans_sql = "SELECT trans_bag_id, donor_id, nurse_id, patient_id FROM TransfusionBag";
$trans_result = $conn->query($trans_sql);



if($trans_result)

{

    while($row=mysqli_fetch_array($trans_result))

    {

        echo "<tr><td>".$row['trans_bag_id']."</td>
        <td>".$row['donor_id']."</td>
        <td>".$row['nurse_id']."</td>
        <td>".$row['patient_id']."</td></tr>";

    }

}
?>



</body>
</html>
