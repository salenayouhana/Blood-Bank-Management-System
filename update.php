<html>
<head>
<title> Update </title>
<link rel="stylesheet" href="sample.css">


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
    <h1> Update Donor </h1>

        <form action="" method="POST">
            <input type="text" name="donor_id" placeholder="Enter Donor ID"/><br>
            <input type="text" name="donor_first_name" placeholder="Donor First Name"/><br>
            <input type="text" name="donor_last_name" placeholder="Donor Last Name"/><br>
            <input type="text" name="donor_blood_type" placeholder="Blood Type"/><br>
            <input type="text" name="donor_email" placeholder="Donor Email"/><br>
            

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
    $id = $_POST['donor_id'];

    $query = "UPDATE `donor` SET donor_first_name='$_POST[donor_first_name]', donor_last_name='$_POST[donor_last_name]', donor_blood_type='$_POST[donor_blood_type]', donor_email='$_POST[donor_email]' where donor_id='$_POST[donor_id]' ";

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