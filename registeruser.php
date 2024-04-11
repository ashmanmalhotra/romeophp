<?php session_start(); ?>
<?php include 'includes/database.php'; ?>
<?php
if(isset($_POST['registerbutton']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];

    $sql = "INSERT INTO users(id, fname, lname, username, password, email) VALUES(NULL, '$first_name', '$last_name', '$username', '$password', '$email')";
    $result = mysqli_query($conn, $sql);
    $_SESSION['register_user_message'] = "Registered a user successfully";
    header("Location: register.php");
}
else{
    header("Location: register.php");
}











