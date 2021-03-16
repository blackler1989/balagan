
<?php
echo "Введите Фамилию   \n";
$a=readline('');     
echo "Введите Имя \n";
$b = readline('');
echo "Введите аэропорт отправления  \n";
$c = readline('');
echo "Введите аэропорт прибытия  \n";
$d = readline('');

function srt_name($name,$lenght)
{
    $str='';
    $i = 0;
    while ($i<$lenght) {
        $str.= $name[$i];
        $i++;
    }
    if ($i<$lenght){
        while ($i<$lenght){
            $str.= " ";
            $i++;
        }
    }
    return $str;
}
//airport
function srt_air($name,$lenght)
{
    $str_air = '';
    $i = 0;
    while ($i < $lenght) {
            $str_air .= $name[$i];
            $i++;
//        switch ($i) {
//            case 4:
//                echo "err";
//                break;
//        }
    }
    if ($str_air!= $name) {
        echo "Ошибка  - $name";
        die;
    }

    return $str_air;
}

$a1= srt_name ($a,6);
$b1= srt_name ($b,6);
$c1= srt_air ($c,3);
$d1=srt_air ($d,3);
echo "
╔═════════════╦════════╦════════════════╗
║ Фамилия     ║ $a1 ║                ║
║ Имя         ║ $b1   ║                ║ 
╠═════════════╬════════╬══════════╦═════╣ 
║ Отправление ║$c1     ║ Прибытие ║ $d1 ║
╚═════════════╩════════╩══════════╩═════╝
";
