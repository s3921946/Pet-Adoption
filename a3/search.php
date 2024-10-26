<title>SEARCH</title>
<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
<main class="container-fluid">
    <div class="row text-center mt-4 ysabeau-SC ">
        <form class="d-flex ms-auto p-2">
            <select class="form-control" id="myInput" onchange="searchFilter()">
            <option value="" disabled selected>Choose an option</option>
            <option value="Cat">Cat</option> 
            <option value="Dog">Dog</option> 
            <option value="">All</option> 
            </select>
        </form>
    </div>
</main>
    <main class="container-fluid" id="items">
        <div class="row p-3 text-center">
            <?php 
            if (isset($_GET['search'])) {
                $search = strtolower($_GET['search']);
                $searchTerm = "%" . $search . "%"; 
            
                $sql = "SELECT * FROM pets WHERE LOWER(petname) LIKE ? OR LOWER(description) LIKE ?";
                $stmt = $conn->prepare($sql);
                
                $stmt->bind_param("ss", $searchTerm, $searchTerm);
                $stmt->execute();
                $result = $stmt->get_result();

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $petname = htmlspecialchars($row['petname']);
                    $description = htmlspecialchars($row['description']);
                    $petId = $row['petid'];
                    $image = htmlspecialchars($row['image']);
                    $type = htmlspecialchars($row['type']);

                    echo <<<HTML
                        <div class="col-md-4 col-sm-6 mb-3" data-category="$type">
                            <a href="details.php?id=$petId" style="text-decoration: none; color: inherit;">
                                <div class="card">
                                    <img src="images/$image" class="card-img-top" alt="$petname">
                                    <div class="card-body">
                                        <h5 class="card-title">$petname</h5>
                                        <p class="card-text">$description</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    HTML;
                }
            } else {
                echo "<p>No pets found matching your search criteria.</p>";
            }
            ?>
        </div>
    </main>

    <?php
    $stmt->close();
} else {
    echo "<p>No search criteria provided.</p>";
}

?>

<?php 
include 'includes/footer.inc'; 
?>
