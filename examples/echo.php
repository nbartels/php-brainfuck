<?php

include "../brainfuck.php";

$interpreter = new Brainfuck();
$interpreter->setSource(">+[>,]<[<]>>[.>]");
$interpreter->setInput("Hi, how are you?");

echo $interpreter->execute()->getOutput();

?>