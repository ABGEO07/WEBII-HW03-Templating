<?php

require_once __DIR__ . '/Services/autoloader.php';

use web2hw\TemplateEngine;

$tempEng = new TemplateEngine();

//Numbers Sum
//$num1 = rand(0, 100);
//$num2 = rand(0, 100);
//
//$tempEng->render('default/index.template.php', [
//    'num1' => $num1,
//    'num2' => $num2
//]);

//Lucky Number
$lucky = rand(0, 100);

$tempEng->render('lucky/number', [
    'number' => $lucky
]);