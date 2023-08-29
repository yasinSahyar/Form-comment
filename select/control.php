<?php

if (isset($_POST['lessons'])) {
    $lesson = $_POST['lessons'];
    echo "almak istediginiz egtim : ".$lesson; // tek secenek icin

    // echo "almak istediginiz egtimler <br>"; // cok lu secim icin
    // foreach ($lessons as $key => $value){
    //     echo $value."<br>";
    // }

} else {
    echo "post yok !";
}

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
        <h3>almak istediginiz egtimi seciniz</h3>
        <select  name="lessons">  <!--"multiple - birden fazla secim ozelligi"-->
            <option value="Html">HTML</option>
            <option value="Css">CSS</option>
            <option value="Java">JAVA</option>
            <option value="Python">PYTHON</option>
            <option value="Javascript">JAVASCRIPT</option>
        </select>
        <input type="submit" value="Gonder">

    </form>
</body>
</html>