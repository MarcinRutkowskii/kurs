<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
</head>
<body>
    <form method="get" action="./13_3_formularze.php">
        <input type="text" name="login">
        <input type="password" name="pass"><br>
        <input type="radio" name="kolor" value="b">Biały
        <input type="radio" name="kolor" value="czer">Czerwony
        <input type="radio" name="kolor" value="cz">Czarny<br>
        <input type="submit" name="przycisk" value="Wyślij">

    </form>
    <?php
//      echo "Witaj $_GET{['login']}";
    if (isset($_GET['przycisk'])&& !empty($_GET['login']) && !empty($_GET['pass'])){
        $login = $_GET['login'];
        $pass = $_GET['pass'];
        echo "Witaj $login<br>Twoje hasło: $pass";
        if (isset($_GET['kolor'])){
            $kolor = $_GET['kolor'];
            switch ($kolor){
                case 'b':
                    $kolor = "Biały";
                    break;
                case 'czer':
                    $kolor = "Czerwony";
                    break;
                case'cz':
                    $kolor = "Czarny";
                    break;
            }
            echo "<br>Twój ulubiony kolor: $kolor";
        }
    }



    ?>
</body>
</html>
