<?php
echo "Введите Оценку   \n";
$a=readline('');
if ($a<=3) echo "Initial \n";
if ($a>4 and $a<=6) echo "Average \n" ;
if ($a>7 and $a<=12) echo "Sufficient \n" ;