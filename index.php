<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types</title>
</head>

<body>
    <!-- Let's see the different data types 
    -interger/int= 99;
    -float/double=3.45;
    -string="Hello, i am a string";
    -boolean/bool=true or false;
    -null;
    -array;
    -object -->

    <?php
    $numero = 100;
    echo $numero.'<br>';
    $decimal=27.9;
    $string='I am a string';
    $boolean_true=true;
    $boolean_false=false;
    $undefined;
    $null=null;
    echo gettype($numero).'<br>';
    echo gettype($decimal).'<br>';
    echo gettype($string).'<br>';
    echo gettype($boolean_true).'<br>';
    echo gettype($boolean_false).'<br>';
    echo $boolean_false;
    echo $boolean_true;
    ?>

</body>

</html>