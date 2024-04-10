<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
</head>
<body>
    <h1>Contact Us</h1>
    <form action="contactinfo.php" method="post" enctype="multipart/form-data">
        <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" id="name"></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Messsage:</td>
                    <td>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" id="male" value="male" checked> Male    
                        <input type="radio" name="gender" id="female" value="female" > Female
                        <input type="radio" name="gender" id="others" value="others" > Others
                    </td>
                </tr>
                <tr>
                    <td>Profile Image:</td>
                    <td>
                        <input type="file" name="profileimage" id="profileimage">
                    </td>
                </tr>                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit">
                    </td>
                </tr>
                <?php
                    if(isset($_SESSION['contactuserror'] )){
                ?>
                <tr>
                    <td colspan="2">
                        <?php    
                            echo $_SESSION['contactuserror'] ;
                            session_destroy();
                        ?>
                    </td>
                </tr>
                <?php
                    }
                ?>
        </table>
    </form>
</body>
</html>