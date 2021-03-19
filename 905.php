<?php
echo "/\
    a/  \ b
    /    \
   /______\
       c
   ";

echo "Введите длины сторон abc   \n";
$a=readline("");

if ($a[0]==$a[1] and $a[1] ==$a[2] )
    echo "1  \n";
else if ($a[0]==$a[1])
    echo "2  \n";

else if ($a[0]!==$a[1] and $a[0]!==$a[2] and $a[1]!==$a[2] )
    echo "3 \n";