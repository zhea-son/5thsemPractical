<?php
$id="";

if(isset($_GET["btndelete"]))
{
        $id=$_GET["txtID"];


$conn=mysqli_connect("localhost","root","","tblstudentDB");
if(!$conn)
{
        die("Error Occur while connection databse");
        return;
}
$query="delete from tbstudent WHERE ID = $id;";

echo $query;
        if(mysqli_query($conn,$query))
        {
                echo("data deleted");
        }
        else
        {
                echo("Data deletion failed");
        }
}


?>

<html>
<head>
<title>Delete Record</title>
</head>
<body>
<form action="deletedb.php" method="get">
ID <input type="text" name="txtID" value="<?php echo $id; ?>" ><br>


 <input type="submit" name="btndelete" value="delete">
</form>
</body>
</html>