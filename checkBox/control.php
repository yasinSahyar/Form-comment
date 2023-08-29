<?php

error_reporting(0);//hata uyarlarini 0 liyor

if($_POST){
    $name = $_POST['name'];
    echo $name."<br>";

    $gender = $_POST['gender'];
    echo $gender."<br>";

    $lessons = $_POST['lessons'];

    foreach($lessons as $key => $value){
        echo $value."<br>";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basvuru Forumu</title>
</head>
<body>
    <form method="POST" action="">
        <h2>Basvuru Forumu</h2>
        <h3>Ad  Soyad</h3>
        <input type="text" name="name" >
        
        <h3>Cinsiyet</h3>
        <input type="radio" name="gender" value="bay"> Bay
        <input type="radio" name="gender" value="bayan"> Bayan
        <h3>Egtim Secimi</h3>
        <input type="checkbox" name="lessons[]" value="HTML"> HTML
        <input type="checkbox" name="lessons[]" value="CSS"> CSS
        <input type="checkbox" name="lessons[]" value="PHP"> PHP
        <input type="checkbox" name="lessons[]" value="JAVA"> JAVA
        <input type="checkbox" name="lessons[]" value="JAVASCRIPT"> JAVASCRIPT
        <input type="checkbox" name="lessons[]" value="python"> python 
        <hr>
        <input type="submit" value="Gonder"> 
        
    </form>
</body>
</html>