<?php 
 $baslik = "PHP degisken baslik";
 $metin = "bu pagraf degisken icersinde tutulmaktir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpHtml</title>
    <style type="text/css">
        h1{
            color: #ff0000;
        }
        p {
            color: #0000ff;
        }
    </style>
    
</head>
<body>
    <h1>html baslik</h1>
    <p>bu paragraf HTML kodu ile yazilmistir !</p>

    <h1>
    <?php
    echo "PHP baslik";
    ?>

    <p>
        <?php
           echo "bu paragraf PHP kodu olarak yazilmistir ! "
        ?>
    </p>
    </h1>
    <?php 
      for ($i=0; $i<5; $i++) {
        echo "$i <br>";
      }
    ?>
    <p style="color: #000000;"><?= "bir baska yazdirma yontemi !"; ?> </p>
    <p>
        <?php
        echo "degiskendeki baslik :$baslik "; 
        ?>
    </p>
    <p>
        <?php
        echo "degiskendeki metin :$metin "; 
        ?>
    </p>
    <br>
</body>
</html>