<?php

$name = $_POST['colors'];
if (!empty($name) )
{

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "technical";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $sql = "INSERT Into user_data (colors)values('$name')";

     //checking username
    if ($conn->query($sql) === TRUE) {
      echo "color name interested successfully.";
     } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

