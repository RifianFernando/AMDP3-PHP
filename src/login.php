<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>

    <?php
    include "./component/navbar.php";
    echo createTemplate();
    ?>


    <h3>Login Form</h3>
    <form action="" method="POST">
        Username: <input type="text" name="user"><br />
        Password: <input type="password" name="pass"><br />
        <input type="submit" value="Login" name="submit" />
    </form>
    <?php
    if (isset($_POST["submit"])) {

        if (!empty($_POST['user']) && !empty($_POST['pass'])) {
            $user = $_POST['user'];
            $pass = $_POST['pass'];

            $con = mysql_connect('localhost', 'root', '') or die(mysql_error());
            mysql_select_db('unieat') or die("cannot select DB");

            $query = mysql_query("SELECT * FROM login WHERE username='" . $user . "' AND password='" . $pass . "'");
            $numrows = mysql_num_rows($query);
            if ($numrows != 0) {
                while ($row = mysql_fetch_assoc($query)) {
                    $dbusername = $row['username'];
                    $dbpassword = $row['password'];
                }

                if ($user == $dbusername && $pass == $dbpassword) {
                    session_start();
                    $_SESSION['sess_user'] = $user;

                    /* Redirect browser */
                    header("Location: member.php");
                }
            } else {
                echo "Invalid username or password!";
            }
        } else {
            echo "All fields are required!";
        }
    }
    ?>
</body>

</html>