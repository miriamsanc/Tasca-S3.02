<?php

declare(strict_types=1);

require_once 'ItemInterface.php';

class TransportCard implements ItemInterface {
    
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }


    public function take(): string {

        return "Taking the " . $this->name . " transport card";
    }
    
}

?>