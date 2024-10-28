<?php
session_start();
include 'includes/db_connect.inc';

pre($_POST);
pre($_FILES);

$sql = null;

$petid = $_POST['petid'];
$petname = $_POST['petname'];
$pet_type = $_POST['type'];
$description = $_POST['description'];
$caption = $_POST['caption'];
$age = (double)$_POST['age'];
$location = $_POST['location'];

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    $sql = "UPDATE pets SET petname = ?, type = ?, description = ?, image = ?, location = ?, caption = ?, age = ? WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sssssisi",
      $_POST['petname'], 
      $_POST['type'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['location'],
      $_POST['caption'],
      $_POST['age'],
      $_POST['petid']);
    }

    $stmt->execute();
    print_r($stmt->error);
include 'includes/footer.inc';

?>