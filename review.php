<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = '';
    $dbname ="reviews";
          
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
          
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $email = $_POST['email'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['details'];
    $date = date("Y-m-d");
    $id=$_POST['id'];

    $query = "INSERT INTO biology (username, email, review, date, passingid) VALUES ('$name', '$email', '$review', '$date','$id')";
    $query_run = mysqli_query($conn, $query);
    if($query_run == true){
        header('location:book-shop.php?success&id='.$id);
    }


?>