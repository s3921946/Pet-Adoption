<title>DELETE</title>
<?php
session_start();
include 'includes/db_connect.inc';
include 'includes/header.inc'; 
include 'includes/nav.inc'; 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM pets WHERE petid = ?";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">Record deleted successfully.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error deleting record.</div>';
        }

        $stmt->close();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error preparing the deletion query.</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">No ID provided for deletion.</div>';
}

echo '<p><a href="index.php">Back to Home</a></p>';

include 'includes/footer.inc';
?>
