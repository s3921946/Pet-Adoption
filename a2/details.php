<?php
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $petId = $_GET['id'];


    $sql = "SELECT petid, image, age, type, location, petname, caption FROM pets WHERE petid = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $petId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $image = htmlspecialchars($row['image']);
        $age = htmlspecialchars($row['age']);
        $type = htmlspecialchars($row['type']);
        $location = htmlspecialchars($row['location']);
        $petname = htmlspecialchars($row['petname']);
        $caption = htmlspecialchars($row['caption']);
    } else {
        echo "<p>Pet not found.</p>";
        exit();
    }
} else {
    echo "<p>Invalid pet ID.</p>";
    exit();
}

$conn->close();
?>

<main class="detailscontainer">
    <div>
        <img class="image" src="images/<?php echo $image;?>" alt="<?php echo $petname; ?>">
    </div>

    <div class="information">
        <div class="details" id="months">
            <span class="material-symbols-outlined">alarm</span>
            <p><?php 
            if($age == 1) {
                echo $age." Month";
            } else {
                echo $age." Months";
            } ?></p>
        </div>
        <div class="details" id="type">
            <span class="material-symbols-outlined">pets</span>
            <p><?php echo $type; ?></p>
        </div>
        <div class="details" id="location">
            <span class="material-symbols-outlined">location_on</span>
            <p><?php echo $location; ?></p>
        </div>
        </div>

    <div class="Description">
        <h1><?php echo $petname; ?></h1>
        <p><?php echo $caption; ?></p>
    </div>
</main>
<?php
include 'includes/footer.inc';
?>
