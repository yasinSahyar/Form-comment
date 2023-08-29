<?php
$comment= $_POST['comment'];
// echo substr($comment,3, 15);//(0 dan 15 karektire kader alyor)

$maxLengh = 100;
$commentLengh = mb_strlen($comment);//turkce karektirler olunca "mb_"ekliyoruz

if($commentLengh > $maxLengh) {
    $cropComment = substr($comment,0,$maxLengh);
    echo $cropComment ;
}else{
    $comment;
}

?>