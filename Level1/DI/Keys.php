<?php
declare(strict_types=1);
require_once 'ItemInterface.php';

class Keys implements ItemInterface {

    private string $type;

    public function __construct(string $type) {
        $this->type = $type;
    }

    public function take(): string {
       
        return "Taking the " . $this->type . " keys";
    }
}


?>