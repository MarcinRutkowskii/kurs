<?php
echo 'interpretacja znaków specjalnych:<br>';
echo "\x61"; //61 jest szesnastkowo co daje litere a w tablicy ascii
echo "<br>\97";
echo '<br> bez interpretacji znaków specjalnych:<br>';
echo '\x61<br>';
//echo '\x3'; znaki specjalne jak serce powinno sie rozpoczynac & i liczbą szesnastkową
echo "\u{9829} \u{61} \u{1560} \u{9825}"; //znaki specjlane u - unicode, szesnastkowo
?>
