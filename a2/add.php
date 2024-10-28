<?php
    include 'includes/header.inc';
    include 'includes/nav.inc';
    include 'includes/db_connect.inc';
    ?>
<main class="flexbox-item-centre-1">
    <section class="flexbox-add add-centre-top">
        <h1 class="add-center-heading">Add a pet</h1>
        <p class="add center-description">YOU CAN ADD A NEW PET HERE</p>
    </section>

    <div class="flexbox-add add-centre-middle">
        
        <form method="POST" action="add-process.php" enctype="multipart/form-data">
            <div class="input-box">
                <label for="petname">Pet Name: <span style="color:red;font-weight:bold">*</span></label>
                <input type="text" name="petname" placeholder="Provide a name for the pet" id="petname" required>
            </div>

            <div class="input-box">
                <label for="pet-type">Type: <span style="color:red;font-weight:bold">*</span></label>
                <select id="pet-type" name="pet-type" required>
                    <option value="" disabled selected>Choose an option</option>
                    <option value="dog">Dog</option>
                    <option value="cat">Cat</option>
                </select>
            </div>

            <div class="input-box">
                <label for="description">Description: <span style="color:red;font-weight:bold">*</span></label>
                <textarea name="description" id="description" rows="3" cols="50" placeholder="Describe the pet briefly" required></textarea>
            </div>

            <div class="input-box-image">
                <label for="image-lab" class="image-label">Select an Image:<span style="color:red;font-weight:bold">*</span></label>
                <input type="file" name="pet-image" id="image-lab" required>
                <label class="image-description">max image size 500px</label>
            </div>

            <div class="input-box">
                <label for="image-cap">Image Caption: <span style="color:red;font-weight:bold">*</span></label>
                <input type="text" name="image-cap" placeholder="Describe the image in one word" id="image-cap" required>
            </div>

            <div class="input-box">
                <label for="age-months">Age (MONTHS): <span style="color:red;font-weight:bold">*</span></label>
                <input type="number" name="age-months" placeholder="Age of a pet in months" id="age-months" required>
            </div>

            <div class="input-box">
                <label for="location">Location: <span style="color:red;font-weight:bold">*</span></label>
                <input type="text" name="location" placeholder="Location of the pet" id="location" required>
            </div>

            <div class="flexbox-add add-centre-bottom">
                <button class="roundedbuttonv3 button-margin" type="submit"><span class="material-symbols-outlined">check_circle</span>Submit</button>
                <button class="roundedbuttonv3 button-margin" type="reset"><span class="material-symbols-outlined">close</span>Clear</button>
            </div>
        </form>
    </div>
</main>

<?php
include 'includes/footer.inc';
?>
