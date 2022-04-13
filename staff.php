
<!DOCTYPE html>
<html>

    <head>
    <title>Staff Directory</title>
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

<h1> Staff Directory </h1>
<table>

<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Years of Experience</th><th>Hospital ID</th></tr>

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

$sql = "SELECT nurse_id, nurse_first_name, nurse_last_name, nurse_years, hospital_id FROM Nurse ORDER BY hospital_id ASC";
$result = $conn->query($sql);

if($result)

{

    while($row=mysqli_fetch_array($result))

    {

        echo "<tr><td>".$row['nurse_id']."</td>
        <td>".$row['nurse_first_name']."</td>
        <td>".$row['nurse_last_name']."</td>
        <td>".$row['nurse_years']."</td>
        <td>".$row['hospital_id']."</td></tr>";

    }

}

?>

</table>

</body>
</html>