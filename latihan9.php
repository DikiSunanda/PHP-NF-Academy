<?php
//looping FOR
for($x=1;$x<=10;$x=$x+1){ //increment
    echo "Saya sedang belajar PHP cui<br>";
}

echo"<hr>";

for($y=10;$y>=1;$y=$y-1){ //decrement
    echo "$y <br>";
}

echo"<hr>";
//looping While

$j=1;
while($j <= 10){
    echo "$j <br>";
    $j=$j+1;
}


echo"<hr>";

$k= 10;
while($k >= 1){
    echo "$k <br>";
    $k=$k-1;
}


echo"<hr>";
?>

<form>
    Jumlah Siswa:
    <?php
    for($x=1;$x<=10;$x=$x+1){ //increment
        echo '<input type="radio" value="pria" name="jk">'.$x;
    }
    ?>
</form>
