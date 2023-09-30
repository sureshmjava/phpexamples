<?php
 $array_var=["hai",
            "Hello",
            "third"=>"Welcome"];

 echo "print the array:";
 var_dump($array_var);

 echo "print the array element through index:";
 var_dump($array_var["third"]);

 echo "print the Array by using foreach :\n";
 foreach($array_var as $value){
    echo $value.",";
 }

 echo "\n print with index:\n";
 foreach($array_var as $index => $value){
    echo $index . "-" .$value.",";
 }
 
 #var_dump("The no of elementsin an array:".count($array_var));
 echo "\nThe no of elements in an array:".count($array_var);

 $primes = [2, 3, 5, 7, 11, 13, 17, 19];
 
for ($i = 1; $i <= 3; $i++) {
    echo $primes[$i] . ", ";
}