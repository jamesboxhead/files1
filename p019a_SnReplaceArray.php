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
 * `php p019a_SnReplaceArray.php tests/blade_orginal.php tests/blade_search.php tests/blade_replace.php output.php`
 *
 * The file names are referential and can be pointed to any file accessible to the user calling the script.
 *
 * The output file is also referential and can be pointed to any path/filename.php required.
 * It can also be used to overwrite the original.php file by passing the same path in the
 * output argument.
 *
 * NB: File names must be .php and must contain valid PHP arrays.
 *
 */
include 'Helpers.php';

if(count($argv)!==5){
    print_to_screen('This script requires 4 arguments eg `php p019a_SnReplaceArray.php original.php array_key replace.php output.php`','error',true);
}

print_to_screen('Process started.','info');

$original_file = $argv[1];
$search_key = $argv[2];
$replace_file = $argv[3];
$output_file = $argv[4];

/*
 * Get the contents
 */
$original_array = include($original_file);
$test_array = include($original_file);
$replace_array = include($replace_file);

if(!$original_array || !$replace_array){
    print_to_screen('Unable to retrieve the required arrays from the file paths provided.','error',true);
}

if(!array_has($original_array,$search_key)){
    print_to_screen('Cannot find the key '.$search_key.' in original array','error',true);
}

if(!array_has($replace_array,$search_key)){
    print_to_screen('Cannot find the key '.$search_key.' in replace array','error',true);
}

/*
 * Set the array under $search_key to the new array from $replace_array
 */
array_set($original_array,$search_key,$replace_array[$search_key]);

if($test_array[$search_key] === $original_array[$search_key]){
    print_to_screen('No replacements were made.','error',true);
}

if(!file_put_contents($output_file,"<?php\nreturn " . generate_array_with_brackets($original_array) . "\n?>")){
    print_to_screen('Unable to write to the output file.','error',true);
}

print_to_screen('Process completed.','info',true);
