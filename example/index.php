<?php

use PhpSimpleOrmExample\Entities\Student;

/*=================== DEV ====================*/
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*================== /DEV ====================*/

require('vendor/autoload.php');

$student = new Student();

$query = $student->select()
    ->where('name', '<>', 'Nawaf')
    ->toSQL();


dd($query);