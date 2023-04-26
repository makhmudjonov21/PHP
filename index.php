<?php 

    $a = isset($_POST['a']) ? $_POST['a'] : 0;
    $b = isset($_POST['b']) ? $_POST['b'] : 0;

    if($a > $b) {
        echo 'Eng katta son: '.$a;
    } else {
        echo 'Eng katta son: '.$b;
    }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="" method="POST">
        <input type="text" name="a"  placeholder="1-sonni kiriting">
        <br>
        <input type="text" name="b"  placeholder="2-sonni kiriting">
        <button type="submit">
            Send
        </button>
    </form>






</body>
</html>