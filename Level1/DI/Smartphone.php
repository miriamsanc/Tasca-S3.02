<?php

declare(strict_types=1);
require_once 'ItemInterface.php';

class Smartphone implements ItemInterface {

    
    public function take(): string {
        
        return "Taking the phone";
    }
}

?>