<?php
/**
 * Created by PhpStorm.
 * User: iammikeym
 * Date: 30/01/18
 * Time: 05:45
 *
 * Test can be run using `php tests/test3.php` from the root
 *
 * Test 3
 *
 * Search fail test
 */
$output = 'test3'.rand(1000,9999).'.php';
system('php p019a_SnReplace.php tests/blade_orginal.php tests/blade_search_fail.php tests/blade_replace.php '.$output);