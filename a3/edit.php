<?php
session_start();
include 'includes/db_connect.inc';
include 'includes/header.inc'; 
include 'includes/nav.inc'; 

$query = "SELECT * FROM pets WHERE petid = ?";
if (!empty($_GET['id'])) {
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $_GET['id']);
    $stmt->execute();

    $result = $stmt->get_result();
} else {
    die("Could not find associated record ID.");
}
?>
<main class="container-fluid p-5">
    <h2>Edit Pet Information</h2>
    <?php
    if ($row = $result->fetch_assoc()) {?>
    <form method="POST" action="edit-process.php" enctype="multipart/form-data">
        <input type="hidden" name="petid" value="<?=$row['petid']?>">
        <div class="form-group">
            <label for="petname">Pet Name</label>
            <input type="text" id="petname" name="petname" class="form-control" value="<?php $row['petname']?>" required>
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
            <input type="file" class="form-control" id="image" name="ïmage" value="<?php echo htmlspecialchars($pet['image']);?>" required>
        </div>

        <div class="form-group">
            <label for="caption">Caption</label>
            <textarea name="caption" id="caption" class="form-control" required><?php echo htmlspecialchars($pet['caption']); ?></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-primary mt-3" style="background-color: #0c8080;">Update Pet</button>
        </div>
    </form>
<?php } ?>
</main>
<?php include 'includes/footer.inc'; ?>
