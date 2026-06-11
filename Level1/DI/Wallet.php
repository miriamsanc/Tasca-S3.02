<?php

declare(strict_types=1);

require_once 'ItemInterface.php';

class Wallet implements ItemInterface {
    
    
    public function take(): string {
        
        return "Taking my cat-themed wallet";
    }
}

?>