<?php
/**
 * Created by PhpStorm.
 * User: mike
 * Date: 30/01/18
 * Time: 05:41
 *
 * Test can be run using `php tests/test1.php` from the root
 *
 * Test 1
 *
 * Write output to a new file
 */
$output = 'test1'.rand(1000,9999).'.php';
system('php p019a_SnReplace.php tests/blade_orginal.php tests/blade_search.php tests/blade_replace.php '.$output);