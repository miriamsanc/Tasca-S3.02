<?php

declare(strict_types=1);

class Person {
    
    private array $items = [];

    public function __construct(array $items) {
        
        $this->items = $items;
    }

    public function takingItems(): array {

        $results = [];

        foreach ($this->items as $item) {            
            $results[] = $item->take();
        }
        return $results;
    }
}



?>