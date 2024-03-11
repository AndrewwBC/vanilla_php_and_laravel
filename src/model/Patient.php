<?php 

namespace Tsi\Php\model;
use Tsi\Php\enum\Plans;
use Tsi\Php\traits\PatientPlan;

class Patient {

    protected string $name;   
    protected int $age;
    protected float $weight;
    protected float $height;
    protected string $patientPlan = Plans::NORMAL->name;

    use PatientPlan;
    
    
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

    public function __toString(){ 

        // $userData = [
        //     "name"   => $this->name,
        //     "age"    => $this->age,
        //     "weigth" => $this->weight,
        //     "heigth" => $this->height,
        // ];

        // return json_encode($userData);

        return "Nome: ".$this->name . "\n" . "Idade: ". $this->age . "\n" . "Peso: " . $this->weight . "\n"  . "Altura: " . $this->height; 
    }
    
}