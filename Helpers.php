<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 30/01/18
 * Time: 08:32
 */
include "vendor/autoload.php";
use Zend\Code\Generator\ValueGenerator;

function print_to_screen($message,$type='info',$die=false){

    switch($type){
        case "info":
            $color = "\033[42m";
            break;
        case "warn":
            $color = "\033[43m";
            break;
        case "error":
            $color = "\033[41m";
            break;
    }

    $message = $color.$message. "\033[0m";
    echo $message.PHP_EOL;

    if($die){
        exit();
    }
}

function generate_array_with_brackets($array){
    $generator = new ValueGenerator($array, ValueGenerator::TYPE_ARRAY_SHORT);
    $generator->setIndentation('  ');
    return $generator->generate();
}