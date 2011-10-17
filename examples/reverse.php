<?php

include "../brainfuck.php";

$interpreter = new Brainfuck();
$interpreter->setSource("+[>,]<-[+.<-]");
$interpreter->setInput("Was it a car or a cat I saw?");

echo $interpreter->execute()->getOutput();
?>