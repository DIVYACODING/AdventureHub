<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit();
}

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $guests = (int)$_POST['guests'];
    $arrivals = mysqli_real_escape_string($db, $_POST['arrivals']);
    $leaving = mysqli_real_escape_string($db, $_POST['leaving']);
    $adventure_name = mysqli_real_escape_string($db, $_POST['adventure_name']);
    $adventure_place = mysqli_real_escape_string($db, $_POST['adventure_place']);
    

    // Insert booking into the database
    $query = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving, adventure_name, adventure_place, user_id) 
              VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', '$adventure_name', '$adventure_place', '$user_id')";

    if (mysqli_query($db, $query)) {
        header('location: view_bookings.php'); // Redirect to the bookings page
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($db);
    }

    mysqli_close($db);
}
?>


   
