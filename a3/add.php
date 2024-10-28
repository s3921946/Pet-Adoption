<?php 
session_start();

if(!isset($_SESSION['username'])) {
    $_SESSION['err'] = "Login Required to add a new pet";
    header("location: login.php");
    exit(0);
}

include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
    <main class="ysabeau-SC container" style="margin-bottom: 75px;">
        <form class="mb-5 "method="POST" action="add-process.php" enctype="multipart/form-data">
            <div class="form-group mb-4 mt-4">
                <label for="name">Pet Name:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Provide the name for the pet" required>
            </div> 

            <div class="form-group mb-3">
                <label for="pet-type">Type:<span class="text-danger">*</span></label>
                <select class="form-control" id="pet-type" name="pet-type" required>
                  <option value="" disabled selected>Choose an option</option>
                  <option>Cat</option>
                  <option>Dog</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="description">Description:<span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" placeholder="Describe the pet briefly" rows="3" required></textarea>
              </div>

            <div class="form-group mb-3">
                <label for="pet-image">Select an image:<span class="text-danger">*</span></label>
                <input type="file" class="form-control-file" id="pet-image" name="pet-image" required>
              </div>

            <div class="form-group mb-3">
                <label for="image-cap">Image caption:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="image-cap" name="image-cap" placeholder="Describe the image in one word" required>
            </div> 

            <div class="form-group mb-3">
                <label for="age-months">Age (months):<span class="text-danger">*</span></label>
                <input type="number" class="form-control" id="age-months" name="age-months" placeholder="Age of pet in months" required>
            </div> 

            <div class="form-group mb-3">
                <label for="location">Location:<span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Location of the pet" required>
            </div> 

            <div class=" d-flex justify-content-center mb-5">
                <button type="submit" class="btn btn-success me-3" style="background-color: #0c8080;" >Submit</button>
                <button type="reset" class="btn btn-success" style="background-color: #0c8080;">Clear</button>
            </div>
        </form>
    </main>
<?php 
include 'includes/footer.inc'; 
?>

