html>
<body>


<?php
  $a= $_POST["username"];
 $b=$_POST["pass"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "githubdb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT firstname ,pass FROM newuser WHERE firstname = '$a' ";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $c= $row["firstname"];
        $d=$row["pass"];
        if($a==$c  && $b==$d)
        {
            header("Location: http://localhost/st/homepage.html");

         }
else
        {
             echo '<script>alert("Invalid Username or password")</script>' ;
        }
         
    }
   }
 

?>

</body>
</html>