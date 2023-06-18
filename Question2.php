<?php
//Write a PHP program to check if a given string starts with 'Go' or not. (Don't use "str_starts_with" function)

function statrtGo($input){
    $first = substr($input,0,2);
    if($first == 'Go'){
        return "the string start with Go";
    }else{
        "the string does not start with Go";
    }

}

echo statrtGo("Go peron.."); //valid
echo statrtGo('Hi everyone'); //invalid


?>
