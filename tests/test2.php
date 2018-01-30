<?php
/**
 * Created by PhpStorm.
 * User: iammikeym
 * Date: 30/01/18
 * Time: 05:45
 *
 * Test can be run using `php tests/test2.php` from the root
 *
 * Test 1
 *
 * Write output to the same file as original
 */
$output = 'copy_blade_orginal_for_test_2'.rand(1000,9999).'.php';
$original = copy('tests/blade_orginal.php',$output);

system('php p019a_SnReplace.php '.$output.' tests/blade_search.php tests/blade_replace.php '.$output);