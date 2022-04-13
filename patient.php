<!DOCTYPE html>

<html lang="en">

<head>
    <title> New Patient Form</title>
    <link rel="stylesheet" href="sample.css">
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
        
        div {
            vertical-align: middle;
            height: 60px;
            width: 500px;
            text-align: left;
            font-size: 30px;
        }
        
        .container {
            font-size: 25px;
            margin-left: 125px;
        }
        
        #p_priority {
            margin-top: 150px;
            padding: 5px;
        }
        
        select {
            margin-left: 30px;
            font-size: 16px;
            height: 30px;
            width: 190px;
        }
        
        #gender_button {
            font-size: 22px;
            padding: 5px;
            margin-left: 190px;
        }
        
        #creation {
            display: block;
            margin-left: 50%;
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
    word-spacing: 5px;
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

        </header>

<body>
    <h1> New Patient Registration</h1>
    <form>

        <div>
            <label> Patient First Name:</label>
            <input type="text" name="patient_first_name">
        </div>

        <div>
            <label> Patient Last Name:</label>
            <input type="text" name="patient_last_name">
        </div>

        <div id="p_type">
            <label> Patient Blood Type:</label> <br>

            <label class="container">
             <input type="checkbox" id="b_type1" name="patient_blood_type" value="A+">
            <label for="b_type1"> A+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type2" name="patient_blood_type" value="A-">
            <label for="b_type2"> A- </label> <br>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type3" name="patient_blood_type" value="B+">
            <label for="b_type3"> B+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type4" name="patient_blood_type" value="B-">
            <label for="b_type4"> B- </label><br>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type5" name="patient_blood_type" value="AB+">
            <label for="b_type5">AB+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type6" name="patient_blood_type" value="AB-">
            <label for="b_type6">AB- </label>
            </label>


            <label class="container">
            <input type="checkbox" id="b_type7" name="patient_blood_type" value="O+">
            <label for="b_type7"> O+ </label>
            </label>

            <label class="container">
            <input type="checkbox" id="b_type8" name="patient_blood_type" value="O-">
            <label for="b_type8"> O- </label><br>
            </label>

        </div>
        <br>


        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
            <label> Patient Age:</label>
            <input type="text" name="patient_age">
        </div>

        <div id="p_gender">
            <label> Patient Gender:</label> <br>

            <div id="gender_button">
                <input type="radio" id="Female" name="patient_gender" value="Female">
                <label for="Memale">Female </label>

                <input type="radio" id="Male" name="patient_gender" value="Male">
                <label for="Male"> Male </label><br>
            </div>
        </div>

        <div id="creation">
            <input type="submit" value="Create" style="height:50px; width:100px" />
        </div>
    </form>

    <h1>Current List of Patients</h1><br/>
   
<?php 
  $host = 'localhost';
  $username = 'my_app';
  $password = 'test';
  $db = 'blood_bank_database';
  $mysqli = new mysqli($host, $username, $password, $db);
  // Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

// insert names
if (isset($_GET['patient_first_name'])){
  // add name to database
  $insert_sql = "INSERT INTO Patient (patient_first_name, patient_last_name, patient_age, patient_blood_type, patient_gender) VALUES 
  (\"" . $_GET['patient_first_name'] . "\" , \"" . $_GET['patient_last_name'] . "\", \"" . $_GET['patient_age'] . "\" , \"" . $_GET['patient_blood_type'] . "\" , \"" . $_GET['patient_gender'] . "\" );";
  $result = $mysqli->query($insert_sql);
  echo "Debug: inserted into table!";
}


if(isset($_POST['patient_priority'])) {
  echo "selected patient_priority: ".htmlspecialchars($_POST['patient_priority']);
}


// delete names
if (isset($_GET['delete_id'])){
  // delete from database
  $delete_sql = "DELETE FROM patient WHERE patient_id=" . $_GET['delete_id'] . ';';
  $result = $mysqli->query($delete_sql);
  echo "Debug: deleted from table!";
}

$sql = "SELECT * FROM blood_bank_database.Patient;";
$result = $mysqli->query($sql);

     
    ?>
</body>


<!-- Retrieving Patient Info-->

<table>

<tr><th>Patient ID</th><th>Patient First Name</th><th>Patient Last Name</th><th>Patient Blood Type</th><th>Patient Age</th><th>Patient Gender</th></tr>

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

$sql = "SELECT patient_id, patient_first_name, patient_last_name, patient_blood_type, patient_age, patient_gender FROM Patient ORDER BY patient_id";
$result = $conn->query($sql);

if($result)

{

while($row=mysqli_fetch_array($result))

{

echo "<tr><td>".$row['patient_id']."</td>
<td>".$row['patient_first_name']."</td>
<td>".$row['patient_last_name']."</td>
<td>".$row['patient_blood_type']."</td>
<td>".$row['patient_age']."</td>
<td>".$row['patient_gender']."</td>
<td>" . " <a href='?delete_id=" . $row["patient_id"] . "'>Delete</a> </p> </td>

</tr>";


}

}

?>

</table>


</div>
</body>
</html>


</html>