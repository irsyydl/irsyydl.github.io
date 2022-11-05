<?php
    session_start();
    if(!isset($_SESSION['login'])){
        echo "<script>
                alert('Akses Ditolak, Silahkan Login');
                document.location.href='login.php';
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/form.css">
    <title>Input Form</title>
</head>
<body>
    <form method="post" class="form" action="add.php" enctype="multipart/form-data">
        <h2>Pesan</h2>
        <p type="Nama"><input type="text" name = "name" placeholder="Tuliskan nama anda"></input></p>
        <p type="Umur"><input type="text" name = "age" placeholder="Masukkan umur anda"></input></p>
        <p type="Email"><input type="text" name = "email" placeholder="Masukkan email anda"></p>
        <p type="Foto"><input type="file" name="foto"></p>
        <button type='submit' value='submit' name='submit'>Submit</button>
    </form>
</body>
</html>