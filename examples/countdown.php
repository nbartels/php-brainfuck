<?php

include "../brainfuck.php";

$interpreter = new Brainfuck();
$interpreter->setSource(
"ASCII character for '9':
 +++++++++++++++++++++++++++++++++++++++++++++++++++++++++
 
 ASCII character for ' ' (space):
 >++++++++++++++++++++++++++++++++
 
 Loop counter set to 10
 >++++++++++
 
 Run loop
 [<<.->.>-]"
);

echo $interpreter->execute()->getOutput();

?>