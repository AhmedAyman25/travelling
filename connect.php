<?php
$servername="localhost";
$database="tourism";
$username="root";
$password="";
//connect to local database
$connection=mysqli_connect($servername,$username,$password,$database);
if($connection)
{
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $msg=$_POST['message'];

       $sql="INSERT INTO book VALUES('$name','$email','$msg')";
    }
       if (mysqli_query($connection, $sql))
{
    echo "<br>";
    echo " Data successufully inserted ";
}
       mysqli_close($connection);

}
else
{
    die('could not connect:');
}
?>
