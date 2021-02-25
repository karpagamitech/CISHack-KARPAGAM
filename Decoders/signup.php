<html>
<?php
$conn=new mysqli('localhost','root','');
if($conn->connect_error){
   die("conn failed".$conn->connect_error);
}
mysqli_select_db($conn,"githubdb");
$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile= $_POST['mobile'];
    $pass= $_POST['pass'];

   $sql="INSERT INTO newuser(firstname,lastname,mobile,pass) VALUES ('$firstname','$lastname','$mobile','$pass')";

if($conn->query($sql) === TRUE)
{
  header("Location: http://localhost/st/homepage.html");
}
else
{
    echo "Error:" .$sql. "<br>" .$conn->error;
}
mysqli_close($conn);
?>
</html>