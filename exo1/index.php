<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php

    include 'strUtils.class.php';

    $myStr = new StrUtils('php is awesome !');
    ?>

<?php  $myStr->italic();
       echo "Italic : <br>" . $myStr->getStr() . "<hr>";
?>

<?php  
        $myStr = new StrUtils('php is awesome !');
        $myStr->bold();
        echo "Bold : <br>" . $myStr->getStr() . "<hr>";
?>

<?php  
        $myStr = new StrUtils('php is awesome !');
        $myStr->underline();
        echo "Underline : <br>" . $myStr->getStr() . "<hr>";
?>

<?php
        $myStr = new StrUtils('php is awesome !');
        $myStr->capitalize();
        echo "Capitalize : <br>" . $myStr->getStr() . "<hr>";
?>

<?php
        $myStr = new StrUtils('php is awesome');
        $myStr->uglify();
        echo "Uglify : <br>" . $myStr->getStr() . "<hr>";
?>

    
</body>
</html>