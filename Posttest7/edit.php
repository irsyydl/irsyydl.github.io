<?php
require 'config.php';

if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email']; 
    
    if(empty($name) || empty($age) || empty($email)) {          
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($age)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($email)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }       
    } else {    
        $result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");
        
        header("Location: index.php");
    }
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $age = $res['age'];
    $email = $res['email'];
}
?>

<html>
<head>  
    <link rel="stylesheet" href="stylesheets/form.css">
    <title>Edit Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" class="form" action="edit.php">
            <h2>Update</h2>
            <p type="Nama"><input type="text" name = "name" placeholder="Tuliskan nama anda" value="<?php echo $name;?>"></input></p>
            <p type="Umur"><input type="text" name = "age" placeholder="Masukkan umur anda" value="<?php echo $age;?>"></input></p>
            <p type="Email"><input type="text" name = "email" placeholder="Masukkan email anda" value="<?php echo $email;?>"></p>
            <p type="Foto"><input type="file" name="foto"></p>
            <p><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></p>
            <button type='submit' value='submit' name='submit'>Submit</button>
    </form>
</body>
</html>
