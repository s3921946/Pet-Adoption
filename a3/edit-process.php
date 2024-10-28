<?php
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';

$sql = null;

$petid = $_POST['petid'];
$petname = $_POST['petname'];
$pet_type = $_POST['type'];
$description = $_POST['description'];
$caption = $_POST['caption'];
$age = (double)$_POST['age'];
$location = $_POST['location'];

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    echo "File uploaded successfully!";

} else {
    echo "There was a problem with the file. Click here to go back.";
}

if ($error == 0) {
    $sql = "UPDATE pets SET petname = ?, type = ?, description = ?, image = ?, location = ? WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sssssis",
      $_POST['petname'], 
      $_POST['type'], 
      $_POST['description'], 
      $_FILES['image']['name'], 
      $_POST['caption'],
      $_POST['age'],
      $_POST['location']);

    $stmt->execute();
    print_r($stmt->error);

    if ($stmt->affected_rows > 0) {
        echo "<p>Pets was added to the database.</p>";
             if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath . "/" . $_FILES['image']['name'])) {
                echo "<p>File was added to the images directory.</p>";
                } else {
                    echo "<p>File was NOT added to the images directory.</p>";
                }
            } else {
            echo "<p>Country was not added to the database, image not uploaded.</p>";
        }
    } else {
        echo "<p>There is a problem with the image file.</p>";
    }
        echo "<p>Return to <a href='gallery.php'>Pets Gallery Page</a>.</p>";

echo "\nInsert Data  Successful!";


include 'includes/footer.inc';

?>