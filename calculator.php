<?php
$op = $_GET["op"];
$x = $_GET["x"];
$y = $_GET["y"];
$z = 0;
if ($op=="sum")
    {
        $z = $x+$y;
        echo "$x+$y=$z";
    }
else if ($op=="subtract")
    {
        $z = $x-$y;
        echo "$x-$y=$z";
    }
else if ($op=="multiply")
    {
        $z = $x*$y;
        echo "$x*$y=$z";
    }
else if ($op=="divide")
    {
        if ($y==0) {
            echo "Nie dzielimy przez 0";
        }
        else
        {
            $z = $x/$y;
            echo "$x/$y=$z";
        }
    }
else echo "Nieprawidłowe działanie: $op";



