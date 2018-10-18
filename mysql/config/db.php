<?php
    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);

    if(mysqli_connect_error()){
        echo "connection failed reason:" . mysqli_connect_errno();
    }


?>