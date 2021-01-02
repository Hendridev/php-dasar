<?php 
session_start();
require 'functions.php';
// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($db, "SELECT * FROM username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}

if(isset($_SESSION["login"])){
    header("location: index.php");
    exit;
}

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

      $result = mysqli_query($db,"SELECT * FROM users WHERE username = '$username'");
// cek username
    if(mysqli_num_rows($result) == 1) {
        // cek pass
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row["password"])){
            // session
            $_SESSION["login"] = true;

            // remember me
            if(isset($_POST['remember'])){
                // buat cookie
                setcookie('id',$row['id'], time()+60);
                setcookie('key', hash('sha256',$row['username']),time()+60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Halaman Login</h1>

<?php if(isset($error)) : ?>
    <p>Username/Password Salah</p>
<?php endif; ?>

    <form action="" method="POST">

    <ul>    
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="remember">Ingat Saya</label>
            <input type="checkbox" name="remember" id="remember">
        </li>
        <li><button type="submit" name="login" id="login">LOGIN</button></li>
    </ul>

    </form>

</body>
</html>