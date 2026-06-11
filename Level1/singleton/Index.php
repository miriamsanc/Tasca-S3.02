<?php
declare(strict_types=1);
require_once 'Tigger.php';

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();


$tigger1->roar();
$tigger2->roar();
$tigger1->roar();


echo "Tigger has roared " . $tigger1->getCounter() . " times." . PHP_EOL;


?>