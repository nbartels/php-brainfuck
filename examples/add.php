<?php

include "../brainfuck.php";

$interpreter = new Brainfuck();
$interpreter->setSource("+++>++++<#[>+<-]#");

echo $interpreter->execute()->getOutput();

?>