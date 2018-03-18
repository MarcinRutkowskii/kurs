<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Skladnia alternatywna</title>
</head>
<body>
    <?php

####################################### instrukcja if ##########################################################

    $x = 2;
    $y = 4;

    if ($x < $y){
        echo "Zmienna x jest mniejsza od zmiennej y";
    }

    if ($x < $y):
        echo "Zmienna x jest minejsza od zmiennej y";   //skladnia alternatywna
    endif;                                              //kazde polecenie jest zakonczone endifem


    ########################### instrukcja if else##############################

      if ($x < $y){
        echo "Zmienna x jest mniejsza od zmiennej y";
    }else{
          echo "Zmienna x nie jest mniejsza od zmiennej y";
      }
      if ($x < $y):
        echo "Zmienna x jest mniejsza od zmiennej y";
    else:
          echo "Zmienna x nie jest mniejsza od zmiennej y";
    endif;

################################ instrukcja if else if ############################################
   echo "<br>";
if ($x < $y){
        echo "Zmienna x jest mniejsza od zmiennej y";
        }else if ($x == $y){
          echo "Zmienna x jest rowna y";
        }else{
            echo"Zmiennax nie jest równa zmiennej y";
        }
    echo "<br>";
if ($x < $y):
        echo "Zmienna x jest mniejsza od zmiennej y";
        elseif ($x == $y):                                  //else if musi byc pisane razem w skladni alternatywnej
          echo "Zmienna x jest rowna y";
        else:
            echo"Zmiennax nie jest równa zmiennej y";
        endif;

########################### instrukcja switch ###########################################

    $a = 5;

    switch($a){
        case 0:
            echo "zmienna a==0<br>";
            break;
        case 5:
            echo "zmienna a==5<br>";
            break;
        case 10:
            echo "zmienna a==10<br>";
            break;
    }

    switch($a):
        case 0:
            echo "zmienna a==0<br>";
            break;
        case 5:
            echo "zmienna a==5<br>";
            break;
        case 10:
            echo "zmienna a==10<br>";
            break;
    endswitch;

######################################## pętla for #########################################

    for ($i=0; $i<=5; $i++){
        echo "$i";
    }
    echo "<br>";
     for ($i=0; $i<=5;$i++):
        echo "$i";
    endfor;
    echo"<br>";
############################ pętla while ######################################


    $i = 2;
    while($i <= 5){
        echo "$i";
        $i++;
    }

    while($i <= 15):
        echo "$i";
        $i++;
    endwhile;

############################### break, if, for ########################################

    for($i=1;$i<10;$i++){
        echo"Zmienna i wynosi:$i<br>";
            if($i == 5){
                break;
            }
    }

    for($i=1;$i<10;$i++):
        echo"Zmienna i wynosi:$i<br>";
            if($i == 5):
                break;
            endif;
    endfor;

#################################### continue, if, for ###############################################
    echo "<br><br>";
        for($i=1;$i<10;$i++){
            if($i == 5)
                continue; //przechodzi do nastepnej linii, wiec nie wyswietli 5
            echo "$i ";
    }
        echo "<br>";
        for($i=1;$i<10;$i++):
            if($i == 5):
                continue;
        endif;
            echo "$i ";
    endfor;


    ?>
</body>
</html>
