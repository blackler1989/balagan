
<?php
echo "Введите значение переменной А \n";
$a=readline('');     
echo "Введите значение переменной B \n";
$b = readline('');
echo "Введите значение переменной C \n";
$c = readline('');
$arr = [$a, $b, $c];
$max = null;

foreach($arr as  $v)
{
    if($v > $max or $max === null)
    {
        $max = $v;
        
    }

    
}
$r=$max**2;
echo " $r ";