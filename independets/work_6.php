<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $numbers = [1, 2, 3, 4, 5];
        $numbers2 = [4,5,6,7,8,9,10,11,12,13,0,15,16];
        $numbers3 = $numbers + $numbers2;
        foreach ($numbers3 as $number) {
            print($number . "<br>");
        }
    ?>

</body>
</html>