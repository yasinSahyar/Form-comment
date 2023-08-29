<?php
if($_POST){
    echo "POST var ! <hr>";
    $phone = $_POST['phone'];
    if(!is_numeric($phone)){
        echo "telfon numrasi hatli !";
        header("Refresh:3");//3 saniye sonra tekrara donyor
    }else {
        echo "telfon numrasi dogru !";
    }

    }else {
    echo "POST yok ! <hr>";

    ?>
    <!DOCTYPE html>
    <html lang="en">
     <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>telfon numrasi control</title>
    </head>
    <body>
    <form method="POST" action="">
        <input type="text" name="phone" placeholder="telfon numrasi" required  maxlength="10" minlength="10">
        <input type="submit" value="submit">
    </form>
    
    </body>
    </html>

    <?php
     }
    ?>