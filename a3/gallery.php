<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
<div class="container-fluid">
    <div class="row text-center mt-4 ysabeau-SC ">
    <h2 class="fw-bold">Pets Victoria has a lot to offer!</h2>
    <p>For almost two decades, Pets Victoria has helped in creating true social change by bringing pet adoption into the mainstream. Our work has helped make a difference to the Victorian rescue community and thousands of pets in need of rescue and rehabilitation. But, until every pet is safe, respected, and loved, we all still have big, hairy work to do.</p>
        <form class="d-flex ms-auto p-2">
            <select class="form-control" id="myInput" onchange="searchFilterGallery()">
            <option value="" disabled selected>Choose an option</option>
            <option value="Cat">Cat</option> 
            <option value="Dog">Dog</option> 
            <option value="">All</option> 
            </select>
        </form>
    </div>
</div>
<main class="container-fluid mb-5" id="items">
    <div class="row p-3 text-center">
        <?php 
        $sql = "SELECT * FROM pets";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)){
                $petname = htmlspecialchars($row['petname']);
                $petId = $row['petid'];
                $image = htmlspecialchars($row['image']);
                $type = htmlspecialchars($row['type']);
                
                echo <<<HTML
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4" data-category='$type'>
                        <a href="details.php?id=$petId" style="text-decoration: none; color: inherit;">
                            <div class="card">
                                <img src="images/$image" class="special-card card-img-top img-fluid" alt="$petname">
                                <div class="card-body">
                                    <h5 class="card-title">$petname</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                HTML;
            }
        } else {
            echo "<p>No pets found.</p>";
        }
        ?>
    </div>
</main>
<?php 
include 'includes/footer.inc'; 
?>
