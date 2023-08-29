<?php
/*
if ($_POST) {
    $username = $_POST['username'];
    $comment = $_POST['comment'];
    echo $username."adli kullanicinin yorumu : ".$comment;


} else {
    echo "post yok !";
}
*/
error_reporting(0);

$username = $_POST['username'] ? $_POST['username'] : null;
$comment = $_POST['comment'] ? $_POST['comment'] : null;
echo $username."adli kullancinin yorumu :".$comment;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>basvuru forumu</title>
</head>
<body style="text-align:center">
    <form method="POST" action="">
        <input type="text" name="username" placeholder="username" value="<?php echo $username; ?>">
        <br><br>
        <textarea name="comment"  cols="50" rows="10" placeholder="yorum yazabilirsiniz..."><?php echo $comment; ?></textarea>
        <br><br>
        <input type="submit" value="Gonder">

    </form>
</body>
</html>