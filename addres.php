<?php 
include('config/db.php');

/*$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "youthhub";

// Create connection
$conn = new mysqli($hostname, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}*/

$win_Label = $_GET['message'];
$timestamp = time();
$user_email = $_SESSION['email'];


$sql = 'INSERT INTO `win_results` (`user_email`, `win_label`, `time_stamp`) VALUES ("'.$user_email.'", "'.$win_Label.'", "'.$timestamp.'");';

$sqlQuery = mysqli_query($connection, $sql);


?>

