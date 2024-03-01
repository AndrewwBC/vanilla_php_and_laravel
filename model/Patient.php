<?php 

namespace model;

class Patient {

    private string $name;   
    private int $age;
    private float $weight;
    private float $height;

    public function __construct(string $name, int $age, float $weight,float $height) {
        $this->name   = $name;
        $this->age    = $age;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getAge(): int {
        return $this->age;
    }

    public function getWeight(): float {
        return $this->weight;
    }

    public function getHeight():float {
        return $this->height;
    }
    
}