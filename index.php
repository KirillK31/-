<?php
use KirillK\{Square, MyLog};

include 'KirillK/Square.php';
include 'KirillK/MyLog.php';
try {
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();
