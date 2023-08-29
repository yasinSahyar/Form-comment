<?php
//isset --bir post islemi varmi yokmu bunun icin kontrol edyor
if(isset($_POST['username']))
    echo "POST var ! -";
else
    echo "POST yok ! -";

if (empty($_POST['username']) || empty($_POST['password']))
    echo "usernmae veya password  bos!";
else
echo "username : ".$_POST['username'];




?>