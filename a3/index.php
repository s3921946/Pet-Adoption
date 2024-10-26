<title>INDEX</title>
<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';

if (isset($_SESSION['login_success']) && $_SESSION['login_success'] === true) {
  echo '<div class="alert alert-warning alert-dismissible fade show text-white d-flex justify-content-between align-items-center" style="margin: 0 auto; background-color: #00c04b;" role="alert"> 
  <span>Login Successful!</span>
  <button type="button" class="close text-white" data-bs-dismiss="alert" style="background-color: #00c04b; border: none;" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>';
  $_SESSION['login_success'] = false;
}

?>

<main class="container-fluid p-5" style="background-color: #F5F5DC">
  <div class="row flex-wrap gy-5">
    <div class="col-12 col-md-6">
      <div id="carouselExampleIndicators" class="carousel slide" style="max-width: 60%; margin: 0 auto;">
        <?php
            $sql = "SELECT * FROM Pets ORDER BY petid DESC LIMIT 4";

            $stmt = $conn->prepare($sql);
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                echo '<div class="carousel-indicators">';
                for ($i = 0; $i < $result->num_rows; $i++) {
                    $activeClass = ($i == 0) ? 'active' : '';
                    echo '<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="' . $i . '" class="' . $activeClass . '" aria-current="true" aria-label="Slide ' . ($i + 1) . '"></button>';
                }
                echo '</div>';
                echo '<div class="carousel-inner">';
                $active = true;
                while ($row = $result->fetch_assoc()) {
                    $petid = $row['petid'];
                    $petname = htmlspecialchars($row['petname']);
                    $image = htmlspecialchars($row['image']);

                    $activeClass = $active ? 'active' : '';
                    $active = false; 

                    echo <<<HTML
                      <div class="carousel-item $activeClass">
                        <img src="images/$image" class="special-card d-block w-100 img-fluid" alt="$petname" style="max-height 500px; max-width: 500px; object-fit: cover;">
                      </div>
                    HTML;
                }
                echo '</div>';
            } else {
                echo "<p>No pets found for the carousel.</p>";
            }
        ?>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
    <div class="col-12 col-md-6 align-self-center justify-content-center text-center">
        <h1 class="display-4 index_heading permanent-Marker">PETS VICTORIA</h1>
        <h2 class="display-4 index_description Poetsen-One">WELCOME TO PET</h2>
        <h2 class="display-4 index_description Poetsen-One">ADOPTION</h2>
    </div>
  </div>
</main>

<main class="container ysabeau-SC mt-1">
    <div class="row p-3">
        <div class="col-7">
          <input type="text" class="form-control" placeholder="First name" aria-label="First name">
        </div>
        <div class="col-3">
          <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
        </div>
        <div class="col-2">
          <button class="btn btn-outline-success" style="background-color: white;" type="submit">Search</button>
        </div>
    </div>
    <div class="row mb-5">
        <h4>Discover Pets Victoria</h4>
        <p>Pets Victoria is a dedicated pet adoption organization based in Victoria, Australia, focused on providing a safe and loving environment for pets in need. With a compassionate approach, Pets Victoria works tirelessly to rescue, rehabilitate, and rehome dogs, cats, and other animals. Their mission is to connect these deserving pets with caring individuals and families, creating lifelong bonds. The organization offers a range of services, including adoption counseling, pet education, and community support programs, all aimed at promoting responsible pet ownership and reducing the number of homeless animals.</p>
    </div>
</main>
<?php 
include 'includes/footer.inc'; 
?>
