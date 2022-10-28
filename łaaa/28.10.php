<!DOCTYPE html>
<?php
    setcookie("wizyta",time(),time()+60*60*24*365);
    setcookie("licznik",0);
    setcookie("dzien",1,0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        if (isset($_COOKIE["color"])){
            $k = $_COOKIE["color"];
            echo "body {background-color:$k}\n";
        }
        ?>
    </style>
</head>
<body>
<input type="color" id="kolor" style="position: fixed; right:10px; top:10px;">
<?php
    if(!isset($_COOKIE["wizyta"])){
        echo "Ta strona używa mechanizmu ciasteczek!<br>";
    }
    if(isset($_COOKIE["licznik"])){
       
        $ile = $_COOKIE["licznik"];
        if(!isset($_COOKIE["dzien"])){
            $ile++;
        }
        setcookie("licznik",$ile,time()+60*60*24*365);
    }    
        if(!isset($_COOKIE["imie"]) && !isset($_GET["imie"])){
?>    
    <form>
        <input id='imie' name='imie'>
        <input type='submit' name='button'>
    </form>
    
<?php
    
    }else{
        if(isset($_GET["imie"])){
            setcookie("imie",$_GET["imie"],time()+3600*24*365);
            $_COOKIE["imie"]=$_GET["imie"];
        }
        echo "Witaj ".$_COOKIE["imie"]."<br>";
        echo "Byłeś tu ostatnio ".date("Y/m/d H:i:s",$_COOKIE["wizyta"])."<br>";
        echo "Jesteś tu już ".$ile." raz<br>";    
    }
        


?>
<script>
    document.getElementById("kolor").addEventListener("input",function(){
        document.body.style.backgroundColor = this.value;
        const d = new Date();
        d.setTime(d.getTime() + (24*60*60*365*100));
        let expires = "expires="+ d.toUTCString();
        document.cookie = "color=" + this.value + ";" + expires + ";"
    })
    
</script>
Reszta strony
</body>
</html>