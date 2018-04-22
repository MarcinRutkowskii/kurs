<?php
session_start();
if(isset($_SESSION['zalogowany'])){
    switch('uprawnienia'){

        case 'admin':
        $_SESSION['uprawnienia'] = 'admin';
        header('location: admin.php');
        break;
        case 'sekretariat':
        $_SESSION['uprawnienia'] = 'sekretariat';
        header('location: sekretariat.php');
        break;
        case 'uczen':
        $_SESSION['uprawnienia'] = 'uczen';
        header('location: uczen.php');
        break;
        case 'gosc':
        $_SESSION['uprawnienia'] = 'gosc';
        header('location: gosc.php');
        break;
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Szkoła</title>
</head>
<body>
  <h2>Panel logowania</h2>
    <?php
        if(isset($_SESSION['blad'])){
            echo $_SESSION['blad'];
        }



    ?>
   <form action="sprawdz.php" method="post">
       <input type="text" name="login" placeholder="login"><br>
       <input type="password" name="pass" placeholder="wpisz hasło"><br><br>
       <input type="submit" name="przycisk"><br><br>


   </form>


</body>
</html>
