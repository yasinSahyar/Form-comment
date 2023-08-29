<?php
$username = $_POST['username'];
echo "girilen karekter sayisi :";
echo strlen($username); //girilen karektir uzunluguni hesapliyor
echo "<br>";
$maxLengh =10;
$usernameLengh = strlen($username);

if($usernameLengh > $maxLengh)
    echo "username 10 karekterden fazla olamaz !";
else
    echo "hosgeldiniz ! :".$username;

?>