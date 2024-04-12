<?php
    function user_count(){
        global $conn;
        $query = "SELECT count(*) as usercount from users;";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        return $row['usercount'];
    }








?>