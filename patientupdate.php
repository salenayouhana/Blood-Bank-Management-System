<html>
<head>
<title> Update </title>
<link rel="stylesheet" href="sample.css">
</head>
<style>
    body {
            background-color: rgb(165, 75, 71);
            color: antiquewhite;
            
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
    <center>
    <h1> Update Patient </h1>

        <form action="" method="POST">
            <input type="text" name="patient_id" placeholder="Enter Patient ID"/><br>
            <input type="text" name="patient_first_name" placeholder="Patient First Name"/><br>
            <input type="text" name="patient_last_name" placeholder="Patient Last Name"/><br>
            <input type="text" name="patient_blood_type" placeholder="Blood Type"/><br>
            <input type="text" name="patient_age" placeholder="Patient Age"/><br>
            <input type="text" name="patient_gender" placeholder="Patient Gender"/><br>

            <input type="submit" name="update" value="Update Data"/>
        </form>
    </center>
</body>
</html>

<?php 
$connection = mysqli_connect("localhost", "my_app", "test");
$db = mysqli_select_db($connection, 'blood_bank_database');


if(isset($_POST['update']))
{
    $id = $_POST['patient_id'];

    $query = "UPDATE `patient` SET patient_first_name='$_POST[patient_first_name]', patient_last_name='$_POST[patient_last_name]', patient_blood_type='$_POST[patient_blood_type]', patient_age='$_POST[patient_age]', patient_gender='$_POST[patient_gender]' where patient_id='$_POST[patient_id]' ";

    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else{
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>