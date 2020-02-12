<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    include("./class-CircleComparator.php");
    $cricleOne = new CircleComparator('cricleOne',8);
    $cricleTow = new CircleComparator('cricleTow',6);

    var_dump($cricleOne->compare($cricleTow));
    
    
 ?>
</body>
</html>