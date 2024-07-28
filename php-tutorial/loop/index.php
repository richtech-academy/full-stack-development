<?php

// While loop

$age = 18;

// while($age <= 20){
//     echo "The age is $age";
//     echo "<br />";
//     $age ++;
// }

// Do While Loop

// do{
//     echo "The age is $age";
//         echo "<br />";
//         $age ++;
// }while($age <= 20);

// For Loop

// for($i=0;$i<10;$i++){
//     echo "The age is $i";
//     echo "<br />";
// }


// For Each Loop

$sampleArray = array('apple', 'orenge', 'banana');

// foreach($sampleArray as $arrayObject){
//     echo $arrayObject;
//     echo "<br/>";
// }

// Array with for loop



for($i=0;$i<count($sampleArray);$i++){
    echo "The froute name is $sampleArray[$i]";
    echo "<br />";
}


?>