<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-form">
        <h1>Login</h1>
            <form action="" method="post">        
                <input type="text" name="user" placeholder="Username"> <br><br>
                <input type="password" name="password" placeholder="Password"> <br><br>
                <input type="submit" name="login" value="Login" class="loginbtn"> <br> <br>
            </form>
        <p>Belum punya akun?
            <a href="register.php">Registrasi</a>
        </p>
    </div>
</body>
</html>

<?php
    session_start();
    require 'config.php';
    error_reporting(E_ERROR | E_PARSE);

    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $password = $_POST['password'];

        $query = "SELECT * FROM akun
                    WHERE username ='$user' OR email='user'";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $username = $row['username'];

        if(password_verify($password, $row['psw'])){
            $_SESSION['login'] = true;
            echo "<script>
                    alert('Selamat Datang $username');
                    document.location.href = 'index.php';
                    </script>";
    } else {
        echo "<script>
                alert('Password incorrect');
            </script>";
        }
    }
?>