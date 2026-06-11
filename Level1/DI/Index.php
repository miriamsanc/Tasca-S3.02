<?php

declare(strict_types=1);

require_once 'ItemInterface.php';
require_once 'Person.php';
require_once 'Wallet.php';
require_once 'Keys.php';
require_once 'TransportCard.php';
require_once 'Smartphone.php';

$items = [
    new Wallet(),
    new Keys("car"),
    new Keys("house"),
    new Smartphone(),
    new TransportCard("T-Mobilitat"),
];

$person = new Person($items);

foreach ($person->takingItems() as $line) {
    echo $line . PHP_EOL;
}


?>