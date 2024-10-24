<title>DETAILS</title>
<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $petId = $_GET['id'];

    $sql = "SELECT * FROM pets WHERE petid = ?";
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
        $description = htmlspecialchars($row['description']);
    } else {
        echo "<p>Pet not found.</p>";
        exit();
    }
} else {
    echo "<p>Invalid pet ID.</p>";
    exit();
}

?>
    <main class="container-fluid p-5">
        <div class="row">
          <div class="col">
              <img class="image" style="max-width: 100%; margin: 0 auto;" src="images/<?php echo $image; ?>" alt="<?php echo $petname; ?>">
              <div class="d-flex rows justify-content-start gap-5 text-center">
                  <div class="p-5" id="months">
                      <span class="material-symbols-outlined">alarm</span>
                      <p><?php 
                        if($age == 1) {
                            echo $age." Month";
                        } else {
                            echo $age." Months";
                        } ?></p>
                    </div>
                  <div class="p-5" id="type">
                      <span class="material-symbols-outlined">pets</span>
                      <p><?php echo $type; ?></p>
                    </div>
                  <div class="p-5" id="location">
                      <span class="material-symbols-outlined">location_on</span>
                      <p><?php echo $location; ?></p>
                    </div>
                </div>
                <?php if (!empty($_SESSION['username'])) {?>
                <div class="d-flex gap-3 p-1 mb-2">
                  <a href="edit.php?id=<?php echo $petId; ?>" class="btn btn-primary">Edit</a>
                  <a href="delete.php?id=<?php echo $petId; ?>" class="btn btn-secondary" onclick="return confirmDeletion();">Delete</a>
              </div>
              <?php
              }?>
          </div>
          <div class="col justify-content-center"> 
              <h2><?php echo $petname; ?></h2>
              <p><?php echo $description; ?></p>
          </div>
        </div>
      </main>
<?php 
include 'includes/footer.inc'; 
?>