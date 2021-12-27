<?php




if(isset($_GET["btnlogin"]))
{
    if($_GET["txtuname"]=="admin" && $_GET["txtpassword"]=="admin")
    {
        header("location:welcome.php");
    }
    else
    {
        echo("Username and password don't match.");
    }
}
?>



<html>
    <head>
        <title>Login Page</title>
    </head>
    <body>
        <form action="login.php" method="get">
            Username<input type="text" name="txtuname"><br>
            Password<input type="password" name="txtpassword"><br>
            <input type="submit" value="Login" name="btnlogin">
        </form>
    </body>
</html>