<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login With PHP || kiwwRogerr</title>
</head>
<body>
    <h1><center>Form Login</center></h1>
    <form action="latihan5.php" method="POST">
        <div>
            <label for="">Nama</label>
            <input type="text" name="nama">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="pass">
        </div>
        <div>
            <label for="">Email</label>
            <input type="email" name="mail">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="date">
        </div>
        <div>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jk" value="Pria">Pria
            <input type="radio" name="jk" valur="Wanita">Wanita
        </div>
        <div>
            <input type="submit" value="simpan">
        </div>
    </form>
</body>
</html>

<?php 
echo 'Nama:'. $_POST['nama'] . '<br>';
echo 'Password:'. $_POST['pas'] . '<br>';
echo 'Email:'. $_POST['mail']. "<br>";
echo 'Tanggal Lahir:'. $_POST['date'] . '<br>';
echo 'Jenis Kelamin:'. $_POST['jk'];
?>

<!-- error_reporting=E_ALL & ~E_STRICT => default

error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING => Begitu
 -->
