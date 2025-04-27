<?php

//constants {DEFINE}

define('NUMBER', 3);

if (NUMBER === "3"){
    echo "it is a string";
} else {
    echo " it is a int";
}

$DEFINE = define('ARRAY_CONSTANT', [
    "Francis",
    "Joseph",
    "Mark",
    "Justin"
]);

const number = 3;

echo number;

echo ARRAY_CONSTANT[1];

VAR_DUMP($DEFINE);



//today I learned Constants
// Explanation in own words:
//Define is like a declaration of a variable in a fancy way :P (what I atleast thought at first) 
// and I tested it, I treated it like a normal variable. I tried var dumping it and the properties of that define constant is shown.
//The way we construct a define constant is we declare the define() and inside it type in the name and the value of the define constant.
// It is like declaring a variable with the fancy things.. I might be saying this but there may be other use of this define constant
//I also learned that define can be used inside if else blocks and function unlike the const declaration.
// My next lesson would be on strings, string manipulations, functions, arrays and loops.
//That is all for my commented log! Good night!

?>