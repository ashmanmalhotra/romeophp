<?php session_start(); ?>
<?php include 'includes/database.php'; ?>
<?php
if(isset($_POST['loginbutton']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['userid'] = $row['id'];
        $_SESSION['firstname'] = $row['fname'];
        $_SESSION['username'] = $row['username'];

        header("Location: index.php");
    }
    else{
        $_SESSION['register_user_message'] = "Incorrect Credentials";
        header("Location: login.php");
    }



}
else{
    echo "Failure section....";
    header("Location: login.php");
}
