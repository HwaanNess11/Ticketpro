<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticketpro</title>
    <link rel="icon" href="img/ticket.png" type="image/png"></link>
</head>
<body>
<h1><font color=#fcdb03>Ticket</font><font color=#023966>pro</font></h1>
<?php

    $nomb = (isset($_POST["nombre"]) && $_POST["nombre"] != "" ) ? $_POST["nombre"] : "Falta proporcionar el nombre";
    $apll = (isset($_POST["apellido"]) && $_POST["apellido"] != "" ) ? $_POST["apellido"] : "No se ingresó el apellido";
    $artis = (isset($_POST["artista"]) && $_POST["artista"] != "") ? $_POST["artista"] : "No seleccionaste el artista";
    $fech = (isset($_POST["fecha"]) && $_POST["fecha"] != "") ? $_POST["fecha"] : "Falta especificar la fecha";
    $lug = (isset($_POST["lugar"]) && $_POST["lugar"] != "") ? $_POST["lugar"] : "Falta especificar el lugar";
    $zon = (isset($_POST["zona"]) && $_POST["zona"] != "") ? $_POST["zona"] : "Falta proporcionar la zona";
    $nBol = (isset($_POST["bol"]) && $_POST["bol"] != "") ? $_POST["bol"] : "Debes solicitar entre 1 y 15 boletos";
    $nBolw=$nBol;

    function artista()
    {
        $artis = (isset($_POST["artista"]) && $_POST["artista"] != "") ? $_POST["artista"] : "No seleccionaste el artista";
        if($artis == "Standing Egg")
            echo "<img src=img/stegg.jpg alt=StandingEgg height=300px></img>";
        if($artis == "Cavetown")
            echo "<img src=img/cvtwn.jpg alt=Cavetown height=300px></img>";
        if($artis == "Golden Child")
            echo "<img src=img/golcha.jpg alt=GoldenChild height=300px></img>";
        if($artis == "RADWIMPS")
            echo "<img src=img/rad.jpg alt=RADWIMPS height=300px></img>";
        if($artis == "ZAZ")
            echo "<img src=img/zaz.jpg alt=ZAZ height=300px></img>";
        if($artis == "Maneskin")
            echo "<img src=img/mask.jpg alt=Maneskin height=300px></img>";

    }


    function lugar()
    {
        $lug = (isset($_POST["lugar"]) && $_POST["lugar"] != "") ? $_POST["lugar"] : "Especifica el lugar";
        if($lug == "Palacio de los deportes")
            echo "<img src=img/palacio.jpg alt=Pdld height=120px></img>";
        if($lug == "Foro Sol")
            echo "<img src=img/foro.jpg alt=Fs height=120px></img>";
        if($lug == "Auditorio Nacional")
            echo "<img src=img/auditorio.jpg alt=AudNac height=120px></img>";
        if($lug == "Frontón México")
            echo "<img src=img/fronton.jpg alt=FrontMe height=120px></img>";
        if($lug == "Auditorio BB")
            echo "<img src=img/bb.jpg alt=Audbb height=120px></img>";
    }

    function zona()
    {
        $zon = (isset($_POST["zona"]) && $_POST["zona"] != "") ? $_POST["zona"] : "Especifica la zona";
        if($zon == "General")
            echo "<img src=img/general.jpg alt=general height=120px></img>";
        if($zon == "Balcón")
            echo "<img src=img/balcon.jpg alt=balcon height=120px></img>";
        if($zon == "Butacas")
            echo "<img src=img/butacas.jpg alt=butacas height=120px></img>";
        if($zon == "VIP")
            echo "<img src=img/vip.jpg alt=vip height=120px></img>";
    }

    function extras()
    {
        $extra1 = (isset($_POST["extra1"]) && $_POST["extra1"] != "") ? $_POST["extra1"] : false;
        $extra2 = (isset($_POST["extra2"]) && $_POST["extra2"] != "") ? $_POST["extra2"] : false;
        $extra3 = (isset($_POST["extra3"]) && $_POST["extra3"] != "") ? $_POST["extra3"] : false;
        $extra4 = (isset($_POST["extra4"]) && $_POST["extra4"] != "") ? $_POST["extra4"] : false;
        if($extra1 || $extra2 || $extra3 || $extra4 != "")
        {
            echo "Extras: <br><br>";
            if($extra1 != "")
                echo $extra1, "<br>";
            if($extra2 != "")
                echo $extra2, "<br>";
            if($extra3 != "")
                echo $extra3, "<br>";
            if($extra4 != "")
                echo $extra4, "<br>";
        }
        else
            echo "Sin extras <br>";
    }

    function frase()
    {
        $artis = (isset($_POST["artista"]) && $_POST["artista"] != "") ? $_POST["artista"] : "No seleccionaste el artista";
        if($artis == "Standing Egg")
            echo "You're right, I'm fine";
        if($artis == "Cavetown")
            echo "You don't hace to be a hero to save the world";
        if($artis == "Golden Child")
            echo "What is the basis of happiness?";
        if($artis == "RADWIMPS")
            echo "Beautifully struggle every day";
        if($artis == "ZAZ")
            echo "Moi, j'veux crever la main sur le cœur";
        if($artis == "Maneskin")
            echo "You're still the oxygen I breathe";

    }

    if($_POST["nombre"] == "" || $_POST["apellido"] == "" || $_POST["artista"] == "" || $_POST["fecha"]  == "" || $lug == "Falta especificar el lugar" || $_POST["zona"] == "" || $_POST["bol"] == "" || $_POST["bol"] <= 0)
    {
        echo "No es posible imprimir los boletos debido a que: <br><br>";
        if($_POST["nombre"] == "")
            echo "<li>$nomb</li>";
        if($_POST["apellido"] == "")
            echo "<li>$apll</li>";
        if($_POST["artista"] == "")
            echo "<li>$artis</li>";
        if($_POST["fecha"] == "")
            echo "<li>$fech</li>";
        if($_POST["zona"] == "")
            echo "<li>$zon</li>";
        if($_POST["bol"] == "" || $_POST["bol"] <= 0)
            echo "<li>$nBol</li>";
        if($lug == "Falta especificar el lugar")
            echo "<li>$lug</li>";
    }
    else
    {
        echo "<h1 align=center>☺ Aquí están tus boletos ☺</h1><br><br>";
        if($nBol>15)
        {
            $nBolw=$nBol;
            $nBol=15;
        }
        for($i=1;$i<=$nBol;$i++)
            echo
            "<table border=1 cellpadding=20px align=center>
            <thead>
                <tr>
                    <th colspan=4>Boletos: $artis</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>$nomb</td>
                    <td>$apll</td>
                    <td>Fecha: $fech</td>
                    <td rowspan=3>", artista(), "</td>
                </tr>
                <tr>
                    <td>$lug</td>
                    <td rowspan=2>", extras(), "</td>
                    <td>$zon</td>
                </tr>
                <tr>
                    <td>", lugar(), "</td>
                    <td>", zona(), "</td>
                </tr>
                <tr>
                    <td colspan=4 align=center>", frase(),"</td>
                </tr>
            </tbody>
        </table>", "<br>";

        if($nBolw>15)
            echo "<h4 align=center>No es posible imprimir más de 15 boletos, faltaron ", $nBolw-15 , " de los $nBolw solicitados.</h4>";
    }
?>
</body>
</html>