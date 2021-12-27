<?php
$id="";
$fn="";
$address="";
$email="";
$gender="";
$ph="";
$dob="";

if(isset($_GET["btnupdate"]))
{
$id=$_GET["txtID"];
$fn=$_GET["txtFullName"];
$address=$_GET["txtAddress"];
$email=$_GET["txtEmail"];
$gender=$_GET["txtGender"];
$ph=$_GET["txtPhone"];
$dob=$_GET["txtDOB"];

$conn=mysqli_connect("localhost","root","","StudentDB");
if(!$conn)
{
        die("Error Occur while connection databse");
        return;
}
$query="UPDATE `tbstudent` SET `FullName` = '$fn', `Address` = '$address', `Phone` = '$ph', `Email` = '$email', `DOB` = '$dob', `Gender` = '$gender' WHERE `tbstudent`.`ID` = $id;";


        if(mysqli_query($conn,$query))
        {
                echo("data updated");
        }
        else
        {
                echo("Data update failed");
        }
}


?>

<html>
<head>
<title>Updates Record</title>
</head>
<body>
<form action="phpupdate.php" method="get">
ID <input type="text" name="txtID" value="<?php echo $id; ?>" ><br>
Full Name <input type="text" name="txtFullName" value="<?php echo $fn; ?>" ><br>
Address <input type="text" name="txtAddress" value="<?php echo $address; ?>" ><br>
Email<input type="text" name="txtEmail" value="<?php echo $email; ?>" ><br>
Gender<input type="text" name="txtGender" value="<?php echo $gender; ?>" ><br>
Phone <input type="text" name="txtPhone" value="<?php echo $ph ?>" ><br>
Dob <input type="date" name="txtDOB" value="<?php echo $dob; ?>" ><br>

 <input type="submit" name="btnupdate" value="update">
</form>
</body>
</html>
