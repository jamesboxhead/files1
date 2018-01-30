<?php
/**
 * Created by PhpStorm.
 * User: iammikeym
 * Date: 30/01/18
 * Time: 05:09
 *
 * Usage Note:
 *
 * The script should be called using PHP CLI by running the command
 *
 * `php p019a_SnReplace.php tests/blade_orginal.php tests/blade_search.php tests/blade_replace.php output.php`
 *
 * The file names are referential and can be pointed to any file accessible to the user calling the script.
 *
 * The output file is also referential and can be pointed to any path/filename.php required.
 * It can also be used to overwrite the original.php file by passing the same path in the
 * output argument.
 *
 */

if(count($argv)!==5){
    print_to_screen('This script requires 4 arguments eg `php p019a_SnReplace.php original.php search.php replace.php output.php`','error',true);
}

print_to_screen('Process started.','info');

$original_file = $argv[1];
$search_file = $argv[2];
$replace_file = $argv[3];
$output_file = $argv[4];

/*
 * Get the contents
 */
$original_contents = file_get_contents($original_file);
$search_string = file_get_contents($search_file);
$replace_string = file_get_contents($replace_file);

if(!$original_contents || !$search_string || !$replace_string){
    print_to_screen('Unable to retrieve the required strings from the file paths provided.','error',true);
}

$output_string = str_replace($search_string,$replace_string,$original_contents);

if($output_string == $original_contents){
    print_to_screen('No replacements were made.','error',true);
}

if(!file_put_contents($output_file,$output_string)){
    print_to_screen('Unable to write to the output file.','error',true);
}

print_to_screen('Process completed.','info',true);

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