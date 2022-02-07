<?php

//1.Find the maximum and minimum element in an array.

$numbers = array(4,6,2,30,11);
echo(max($numbers));echo("\n");
echo(min($numbers));

//2.WAP to reverse an array
print_r(array_reverse($numbers));

//3.WAP to find an element in an array.
$r = readline("Enter Value");
if(in_array($r,$numbers)){
    echo("Element found");
}
else{
    echo("Not Found");
}
//4.WAP to delete a key at a given position in a linked list.
