<?php session_start(); ?>
<?php include 'includes/database.php'; ?>
<?php
if(isset($_POST['loginbutton']) && $_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT count(*) as rowcount FROM users WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    if($row['rowcount'] == 0){
        $_SESSION['register_user_message'] = "Something went wrong";
        header("Location: login.php");
    }
    else{
        echo "Success section....";
    }

}
else{
    echo "Failure section....";
    header("Location: login.php");
}
