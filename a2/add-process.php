<?php
$title = "Insert Pet Page";
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';

$petname = $_POST['petname'];
$pet_type = $_POST['pet-type'];
$description = $_POST['description'];
$caption = $_POST['image-cap'];
$age = (double)$_POST['age-months'];
$location = $_POST['location'];

$image = $_FILES['pet-image']['name'];
$temp = $_FILES['pet-image']['tmp_name'];
$error = $_FILES['pet-image']['error'];

if (isset($_FILES['pet-image']) && $_FILES['pet-image']['error'] == 0) {
    echo "File uploaded successfully!";

} else {
    echo "There was a problem with the file. Click here to go back.";
}

if ($error == 0) {
    $sql = "INSERT INTO pets (petname, type, description, image, caption, age, location) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
      "sssssis",
      $_POST['petname'], 
      $_POST['pet-type'], 
      $_POST['description'], 
      $_FILES['pet-image']['name'], 
      $_POST['image-cap'],
      $_POST['age-months'],
      $_POST['location'] );
    $stmt->execute();
    print_r($stmt->error);

    if ($stmt->affected_rows > 0) {
        echo "<p>Pets was added to the database.</p>";
             if (move_uploaded_file($_FILES['pet-image']['tmp_name'], $imagePath . "/" . $_FILES['pet-image']['name'])) {
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