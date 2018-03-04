<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularze</title>
    <link rel="stylesheet">
</head>
<body>
    <h3>Dane pobrane z formularza</h3>
<?php
    $imie = $_GET['imie'];
    $nazwisko = $_GET['nazwisko'];
    $haslo = $_GET['Password'];
    $pass2 = $_GET['haslo2'];

    if(isset($_GET['przycisk']) && !empty($_GET['imie']) && !empty($_GET['nazwisko']) && !empty($_GET['Password']) && ($_GET['Password'] == $_GET['haslo2'])){

    echo 'Imię: <span style="color:blue;font-weight:bold">'.$imie."</span><br>Nazwisko:  <span class='czerwony'>$nazwisko.<br>"."Hasło:  <span class='czerwony'>$haslo</span></br>";
    }else{
        //echo 'Jestes januszem';
        header('Location: 13_1_formularze.php');
    }


/*    }else{
        ?>
        <script>
            alert('Jestes Januszem');
    </script>
    <?php
        header('Location: 13_1_formularze.php');
    }*/
?>
</body>
</html>
