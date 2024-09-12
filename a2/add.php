<?php
$title = "index";
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
        <main class="flexbox-item-centre-1">
            <div class="flexbox-add add-centre-top">
                <h1 class="add-center-heading">Add a pet</h1>
                <p class="add center-description">YOU CAN ADD A NEW PET HERE</p>
            </div>
            <div class="flexbox-add add-centre-middle">
                <form action="#">
                    <div class="input-box">
                        <label for="petname">Pet Name: <span style="color:red;font-weight:bold">*</span></label>
                        <input type="text" placeholder="Provide a name for the pet" id="petname">
                    </div>
                    <div class="input-box">
                        <label for="pet-type">Type: <span style="color:red;font-weight:bold">*</span></label>
                        <select id="pet-type" name="pet-type">
                            <option value="" disabled selected>Choose an option</option>
                            <option value="dog">Dog</option>
                            <option value="cat">Cat</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label for="description">Description: <span style="color:red;font-weight:bold">*</span></label>
                        <textarea name="Description" id="description" rows="3" cols="50" placeholder="Describe the pet briefly"></textarea>
                    </div>
                    <div class="input-box-image">
                        <label for="image-lab" class="image-label">Select an Image:<span style="color:red;font-weight:bold">*</span></label>
                        <input type="file" placeholder="" id="image-lab">
                        <label class="image-description">max image size 500px</label>
                    </div>
                    <div class="input-box">
                        <label for="image-cap">Image Caption: <span style="color:red;font-weight:bold">*</span></label>
                        <input type="text" placeholder="describe the image in one word" id="image-cap">
                    </div>
                    <div class="input-box">
                        <label for="age-months">Age (MONTHS): <span style="color:red;font-weight:bold">*</span></label>
                        <input type="text" placeholder="Age of a pet in months" id="age-months">
                    </div>
                    <div class="input-box">
                        <label for="location">Location: <span style="color:red;font-weight:bold">*</span></label>
                        <input type="text" placeholder="location of the pet" id="location">
                    </div>
                    <div class="flexbox-add add-centre-bottom">
                        <button class="roundedbuttonv3 button-margin"><span class="material-symbols-outlined">check_circle</span>submit</button>
                        <button class="roundedbuttonv3 button-margin"><span class="material-symbols-outlined">close</span>clear</button>
                    </div>
                </form>
            </div>
        </main>

<?php
include 'includes/footer.inc';
?>