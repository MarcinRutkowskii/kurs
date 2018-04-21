<?php
session_start();
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
