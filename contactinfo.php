<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
        $_SESSION['contactuserror'] = "Please fill in all fields";
        header("Location: contactus.php");
    }
    else{
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $gender = $_POST['gender'];

        echo $name . "<br/>";
        echo $email . "<br/>";
        echo $message . "<br/>";
        echo $gender . "<br/>";

        if(isset($_FILES['profileimage'])) {
            $file_name = $_FILES['profileimage']['name'];
            $file_tmp_name = $_FILES['profileimage']['tmp_name'];
            //echo "Name of the File: " . $file_name . "<br/>";
            //echo "Temporary Name of the file: " . $file_tmp_name . "<br/>";

            $targeted_directory = "uploads/";

            move_uploaded_file($file_tmp_name, $targeted_directory . $file_name);

        }

    }
    
}
else{
    header("Location: contactus.php");
}




