<?php

// Premiere ligne
$a = 50;
$b = 10;
$color = "black";


echo "ligne 1<br>";
     if( $a > $b  ) {
    echo "Hello World! <br><br>";
}

//Deuxieme ligne
echo "ligne 2<br>";
if( $a !== $b)
    {
    echo "Hello World2<br><br>";
}

//Troisieme ligne
echo "ligne 3<br>";
if($a === $b) {
    echo "Oui<br>";
}
else
{
    echo "Non<br>";
}


//Quatrieme ligne

echo "<br>ligne 4<br>";
 if($a == $b) {
    echo "1";
}
 elseif($a > $b) {
    echo "2<br>";
}
 else
{
    echo "3<br>";
}


//Cinquieme ligne

echo "<br>ligne 5<br>";

switch($color) {
    case "red":
        echo "Hello red";
        break;
    case "green":
        echo "Welcome";
        break;
    default:
        echo "on verras plus tard !!";
}

