<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $masa = $_GET['masa'];
    $wzrost = $_GET['wzrost'];
    $bmi = $masa/(($wzrost/100)*($wzrost/100));
    echo "BMI = " .($bmi). "<br>";
    if ($bmi < 18.5) echo 'niedowaga <img src="https://thumbs.dreamstime.com/z/skinny-guy-n-gym-vector-illustration-cool-cartoon-style-geometrical-flat-isolated-white-background-70243123.jpg" alt=""';
    else if ($bmi < 25) echo 'pożądana masa ciała <img src="https://thumbs.dreamstime.com/z/skinny-guy-n-gym-vector-illustration-cool-cartoon-style-geometrical-flat-isolated-white-background-70243123.jpg" alt=""';
    else if ($bmi < 30) echo 'nadwaga <img src="https://thumbs.dreamstime.com/z/skinny-guy-n-gym-vector-illustration-cool-cartoon-style-geometrical-flat-isolated-white-background-70243123.jpg" alt=""';
    else if ($bmi < 35) echo 'otyłość <img src="https://portalzdrowiadziecka.pl/wp-content/uploads/2015/10/ma%C5%82y-grubas-.jpg" alt"">';
    else if ($bmi < 40) echo 'otyłość duża <img src="https://portalzdrowiadziecka.pl/wp-content/uploads/2015/10/ma%C5%82y-grubas-.jpg" alt"">';
    else  echo 'otyłość olbrzymia <img src="https://portalzdrowiadziecka.pl/wp-content/uploads/2015/10/ma%C5%82y-grubas-.jpg" alt"">';
    

    ?>
</body>
</html>