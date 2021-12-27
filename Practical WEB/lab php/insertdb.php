<?php
$id="";
$fn="";
$address="";
$email="";
$gender="";
$ph="";
$dob="";

if(isset($_GET["btnInsert"]))
{
$id=$_GET["txtID"];;
$fn=$_GET["txtFullName"];
$address=$_GET["txtAddress"];
$email=$_GET["txtEmail"];
$gender=$_GET["txtGender"];
$ph=$_GET["txtPhone"];
$dob=$_GET["txtDOB"];

$conn=mysqli_connect("localhost","root","","ranjan");
if(!$conn)
{
        die("Error Occur while connection databse");
        return;
}
$query="INSERT INTO tblstudent (ID, FullName, Address, Email, Gender,  Phone, DOB) VALUES ('$id', '$fn', '$address', '$email', '$gender',  '$ph', '$dob')";


        if(mysqli_query($conn,$query))
        {
                echo("Data saved");
        }
        else
        {
                echo("Data save failed");
        }
}


?>

<html>
<head>
<title>Insert Record</title>
<style>
        #ID{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #FN{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #ADD{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #EM{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #GD{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #PH{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
        #DOB{
                border: 2px solid gray;
                border-radius: 10px;
                margin-left: 30px;
        }
</style>
</head>
<body>
<form action="insertdb.php" method="get">
ID <input type="text" id="ID" name="txtID" value="<?php echo $id; ?>" ><br>
Full Name <input type="text" id="FN" name="txtFullName" value="<?php echo $fn; ?>" ><br>
Address <input type="text" id="ADD" name="txtAddress" value="<?php echo $address; ?>" ><br>
Email<input type="text" id="EM" name="txtEmail" value="<?php echo $email; ?>" ><br>
Gender<input type="text" id="GD" name="txtGender" value="<?php echo $gender; ?>" ><br>
Phone <input type="text" id="PH" name="txtPhone" value="<?php echo $ph ?>" ><br>
Dob <input type="date" id="DOB" name="txtDOB" value="<?php echo $dob; ?>" ><br>

<input type="submit" name="btnInsert" value="Insert" ><br>

</form>
</body>
</html>


