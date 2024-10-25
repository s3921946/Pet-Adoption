<?php
        if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "petsvictoria";
            $imagePath = "/xampp/htdocs/wp/a3/images";
        } else {
            $servername = "talsprddb02.int.its.rmit.edu.au";
            $username = "s3921946";
            $password = "Chicken120998!";
            $dbname = "s3921946";
            $imagePath = "/home/sl6/S3921946/public_html/wp/a3/images"; 
        }

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error)  
            die("Connection failed: " . $conn->connect_error);
        
function pre($var) {
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}
?>