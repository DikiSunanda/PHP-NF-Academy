<?php
session_start();
if(!$_SESSION['user']){
    header('location:latihan7.php');
}
?>

<h1>Selamat Datang <?php echo $_SESSION['user'];?> di website NF</h1>

<br>

<form action="" method="POST">
<input type="submit" value="logout" name="logout">
</form>

<?php
if(isset($_POST['logout'])){
session_destroy(); //lepas sesi login
header('location: latihan7.php');
}
?>