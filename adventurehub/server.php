<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$errors = array();
// LOGOUT USER
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['user_id']);
    unset($_SESSION['username']);
    header("location: login.php"); // redirect to login page
    exit();
}
// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'project');
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}
// REGISTER USER
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // Validation
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) { array_push($errors, "Passwords do not match"); }

    // Check if user already exists
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) { array_push($errors, "Username already exists"); }
        if ($user['email'] === $email) { array_push($errors, "Email already exists"); }
    }
// Register user if no errors
 if (count($errors) == 0) {
    $password = password_hash($password_1, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($db, $query)) {
        $_SESSION['user_id'] = mysqli_insert_id($db);
        $_SESSION['username'] = $username;
        header('location: home.php');
        exit();
    } else {
        array_push($errors, "Database error: " . mysqli_error($db));
    }
}
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($password)) { array_push($errors, "Password is required"); }

    if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($db, $query);
if ($result && mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username;
        header('location: home.php');
        exit();
    } else {
        array_push($errors, "Wrong username/password combination");
    }
} else {
    array_push($errors, "User not found");
}}}
?>
