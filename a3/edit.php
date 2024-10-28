
<?php
session_start();

include 'includes/db_connect.inc'; 
include 'includes/header.inc';
include 'includes/nav.inc'; 

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT petid, petname, age, type, location, caption FROM pets WHERE petid = ?";
    
    if ($stmt = $conn->prepare($query)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result && $result->num_rows > 0) {
            $pet = $result->fetch_assoc(); 
        } else {
            echo '<div class="alert alert-danger" role="alert">Pet not found.</div>';
            exit();
        }
        $stmt->close();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error preparing the query.</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Invalid or no ID provided.</div>';
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $petname = $_POST['petname'];
    $age = $_POST['age'];
    $type = $_POST['type'];
    $location = $_POST['location'];
    $caption = $_POST['caption'];

    $update_query = "UPDATE pets SET petname = ?, age = ?, type = ?, location = ?, caption = ? WHERE petid = ?";

    if ($stmt = $conn->prepare($update_query)) {
        $stmt->bind_param("sisssi", $petname, $age, $type, $location, $caption, $id);

        if ($stmt->execute()) {
            echo '<div class="alert alert-success" role="alert">Pet details updated successfully.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Error updating the pet details.</div>';
        }

        $stmt->close();
    } else {
        echo '<div class="alert alert-danger" role="alert">Error preparing the update query.</div>';
    }
}

?>
<main class="container-fluid p-5">
    <h2>Edit Pet Information</h2>
    <form method="POST">
        <div class="form-group" action="edit-process.php" enctype="multipart/form-data">
            <label for="petname">Pet Name</label>
            <input type="text" id="petname" name="petname" class="form-control" value="<?php echo htmlspecialchars($pet['petname']); ?>" required>
        </div>

        <div class="form-group">
            <label for="age">Age (in months)</label>
            <input type="number" id="age" name="age" class="form-control" value="<?php echo htmlspecialchars($pet['age']); ?>" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" id="type" name="type" class="form-control" value="<?php echo htmlspecialchars($pet['type']); ?>" required>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="form-control" value="<?php echo htmlspecialchars($pet['location']); ?>" required>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="ïmage" value="<?php echo htmlspecialchars($pet['image']);?>" required>>
        </div>

        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" id="caption" class="form-control" required><?php echo htmlspecialchars($pet['caption']); ?></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3" style="background-color: #0c8080;">Update Pet</button>
        </div>
    </form>
</main>
<?php include 'includes/footer.inc'; ?>
