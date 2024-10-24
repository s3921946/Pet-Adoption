<title>REGISTER PROCESS</title>
<?php 
session_start();
include 'includes/db_connect.inc';

$sql = "INSERT INTO users (username, password, reg_date) VALUES (?, SHA(?), now())";

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    $_SESSION['usrmg'] = "You have successfully registered.";
} else {
    $_SESSION['usrmg'] = "There was an error with your registration.";
}

header("Location: index.php");
exit(0);
?>
