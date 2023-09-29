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