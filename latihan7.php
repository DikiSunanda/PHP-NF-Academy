<?php
session_start();//Sesi tangkap login
?>

<form action="" method="POST">
<label for="">Username</label>
<input type="text" name="username" placeholder="Masukan nama anda"><br><br>
<label for="">Password</label>
<input type="password" name="password" placeholder="Masukan password anda"><br><br>
<input type="submit" value="login" name="masuk">
</form>

<?php
if(isset($_POST['masuk'])){
 $userName = $_POST['username'];
 $passWord = $_POST['password'];


 //Jika username cocok maka bisa login
 //Selain itu ditolak

 if($userName == 'admin' && $passWord == '123' ){
    $_SESSION['user'] = $userName;
    header('location: beranda.php');
 }else{
    echo "<script>alert('Password Salah !');</script>";
 }

}
?>