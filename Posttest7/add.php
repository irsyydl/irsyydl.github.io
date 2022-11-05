<html>
<head>
    <title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
require 'config.php';

if(isset($_POST['submit'])) {   
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $foto = $_FILES['foto']['name'];
    $x = explode('.', $foto);
    $ekstensi = strtolower(end($x));
    $foto_baru = "$name.$ekstensi";

    $tmp = $_FILES['foto']['tmp_name'];
    $tgl_upload = date('y-m-d');

    if(move_uploaded_file($tmp, 'foto/' . $foto_baru)){
        $query = "INSERT INTO users(name,age,email,foto,tanggal) VALUES('$name', '$age', '$email', '$foto_baru', '$tgl_upload')";
        $result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,foto,tanggal) VALUES('$name','$age','$email','$foto_baru','$tgl_upload')");
    }
    //display success message
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='outputdata.php'>View Result</a>";
}

?>
</body>
</html>