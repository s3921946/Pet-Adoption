<!DOCTYPE html>
<html lang="en">
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