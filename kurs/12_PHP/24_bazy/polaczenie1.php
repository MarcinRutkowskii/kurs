<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Salon pielęgnacji</title>
    <link rel="stylesheet" href="salon.css">
</head>
<body>
    <div id="baner">
        <h1> SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
    </div>
    <div id="lewy">
        <h3>SALON ZAPRASZA W DNIACH</h3>
    </div>
    <div id="srodkowy">
        <h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>
        <?php
        if(@$polaczenie = mysqli_connect('localhost','root','','salon')){



            mysqli_close($polaczenie);
        }else{
            echo "Brak połączenia z bazą danych salon";
        }

        ?>

    </div>
    <div id="prawy">
        <h3>USŁUGI</h3>

    </div>
</body>
</html>
