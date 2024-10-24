<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
=======
>>>>>>> f67b69a580cf6f9e9f8ac302a7c06a70175b304c
<?php
$title = "index";
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>

<main class="flexbox-item-centre-1">
    <div class="flexbox-pets gallery-centre-top">
        <h1 class="gallery-center-heading">Pets Victoria Has A Lot to Offer!</h1>
        <h2 class="gallery-center-description">For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a</h2>
        <h3 class="gallery-center-description">difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all</h3>
        <h4 class="gallery-center-description">still have big, hairy work to do.</h4>
    </div>
    <div class="flexbox-pets gallery-centre-bottom">
        <?php 
        $sql = "SELECT petid, petname, image FROM pets";
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                $petname = htmlspecialchars($row['petname']);
                $petId = $row['petid'];
                $image = htmlspecialchars($row['image']);
            
                echo <<<HTML
                <a href="details.php?id=$petId" style="text-decoration: none; color: inherit;">
                    <div class="gallery-pets">
                        <div class="pets-top">
                            <img class="gallery-pet-option" src="images/$image" alt="$petname">
                            <div class="gallery-pets-hover">
                                <span class="material-symbols-outlined" style="color:black;font-weight:bold">search</span>Discover More!
                            </div>
                        </div>
                        <div class="pets-bottom">
                            <p>$petname</p>
                        </div>
                    </div>
                </a>
                HTML;
            }
            
        } else {
            echo "<p>No pets found.</p>";
        }
        $conn->close();
        ?>
    </div>
</main>

<?php
include 'includes/footer.inc';
?>