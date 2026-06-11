<?php
declare(strict_types=1);

class Tigger {
    
    private static Tigger $instance;
    private int $counter = 0;

    private function __construct() {
        echo "Building character..." . PHP_EOL;
    }

    private function __clone() {}

    public function __wakeup() {}

    public static function getInstance(): Tigger {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function roar() : void {
        echo "Grrr!" . PHP_EOL;
        $this->counter++;
    }

    public function getCounter() : int {
        return $this->counter;
    }

}
?>
