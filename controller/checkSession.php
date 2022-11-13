<?php

use connection\database;
// require("/connection/database.php");
// $path = "/connection/database.php";
// echo $path;

$class = new database();

if (!$class->con()) {
    die("Error Connection: " . mysqli_connect_error());
} else {
    $result = mysqli_query($class->query('user'), $query);
    while ($row = $result->fetch_assoc()) {
        print_r($row);
    }
    // session_start();
    // if (!isset($_SESSION["sess_user"])) {
    //     $_SESSION["sess_user"]  = 'Guest';
    // } else {
    //     $numrows = mysql_num_rows($query);
    //     if ($numrows != 0) {
    //         while ($row = mysql_fetch_assoc($query)) {
    //             $dbusername = $row['username'];
    //             $dbpassword = $row['password'];
    //         }
    //     }
    //     $_SESSION["sess_user"] = $user;
    // }
}

// if (!$con) {
//     die("Error Connection: " . mysqli_connect_error());
// }

// session_start();  
// if(!isset($_SESSION["sess_user"])){  
//     $user = 'guest';
// } else {  
// if (isset($_POST["submit"])) {
//     if (!empty($_POST['user']) && !empty($_POST['pass'])) {
//         $user = $_POST['user'];
//         $pass = $_POST['pass'];

//         $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
//         mysql_select_db('user_registration') or die("cannot select DB");

//         $query = mysql_query("SELECT * FROM login WHERE username='" . $user . "' AND password='" . $pass . "'");
//         $numrows = mysql_num_rows($query);
//         if ($numrows != 0) {
//             while ($row = mysql_fetch_assoc($query)) {
//                 $dbusername = $row['username'];
//                 $dbpassword = $row['password'];
//             }

//             if ($user == $dbusername && $pass == $dbpassword) {
//                 session_start();
//                 $_SESSION['sess_user'] = $user;

//                 /* Redirect browser */
//                 header("Location: member.php");
//             }
//         } else {
//             echo "Invalid username or password!";
//         }
//     } else {
//         echo "All fields are required!";
//     }
// }
