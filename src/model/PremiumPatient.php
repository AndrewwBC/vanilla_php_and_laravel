<?php 

namespace Tsi\Php\model;

class PremiumPatient extends Patient {
    
    private string $descount;

    public function __construct(string $name, int $age, float $weight, float $height, string $descount) {
        $this->descount = $descount;
        $this->name = $name;
    }

    public function __toString(): string {
       return parent::__toString() . $this->descount;
    }
}

