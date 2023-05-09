<?php
    session_start();
    if (!isset($_SESSION['SESSION_EMAIL'])) {
        header("Location: index.php");
        die();
    }

    include 'config.php';

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$_SESSION['SESSION_EMAIL']}'");

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
         
        $bg_color = '#dba51d'; // Red background color 
        echo "<body style='background-color: $bg_color;'>";

        $margin_top = 'margin-top: 50px';

        echo "<p><center>Are you sure you want to log out <p><center>" . $row['name'] . " <center> <a href='logout.php'>Logout</a> <center>";

        
    }
?>


