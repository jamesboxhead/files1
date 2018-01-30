<?php
/**
 * Created by PhpStorm.
 * User: iammikeym
 * Date: 30/01/18
 * Time: 05:45
 *
 * Test can be run using `php tests/test4.php` from the root
 *
 * Test 4
 *
 * Array replace
 */
$output = 'test3'.rand(1000,9999).'.php';

/*
 * Test failing key
 */
system('php p019a_SnReplaceArray.php tests/global.php unknown-key tests/global-replace.php '.$output);

system('php p019a_SnReplaceArray.php tests/global.php tasks tests/global-replace.php '.$output);