<?php 
session_start();
include 'includes/header.inc';
include 'includes/nav.inc';
include 'includes/db_connect.inc';
?>
    <main class="d-flex justify-content-center mt-5 mb-5">
        <div class="col-12 col-md-6">
            <form class="ysabeau-SC" action="register-process.php" method ="POST">
                <h3>Sign Up</h3>
                <div class="mb-2">
                    <label for="username" class="form-label">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" required>
                </div>

                <div class="mb-2">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-success">Continue</button>
                </div>
            </form>
        </div>
    </main>
    <?php 
include 'includes/footer.inc'; 
?>
