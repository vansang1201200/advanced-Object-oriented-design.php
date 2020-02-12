<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once './class-chicken.php';
    include_once './class-Tiger.php';
    include_once './class-Apple.php';
    include_once './class-Orange.php';
    echo ('---- Animal<br>');
    $Animal[0] = new Tiger();
    $Animal[1] = new chicken();
    //echo $Animal[0]->makeSound();
    foreach ($Animal as $Animals) {
        echo $Animals->makeSound() . '<br>';
        if ($Animals instanceof chicken) {
            echo $Animals->howtoEat();
        }      
    }
     echo ('---- Fruits<br>');
     $Fruits[0] = new Apple();
     $Fruits[1] = new Orange();
     foreach ($Fruits as $Fruit) {
         echo ($Fruit->howtoEat());
     }
    ?>
</body>

</html>