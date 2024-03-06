<?php
declare(strict_types=1);

namespace utils;

use model\Patient;
class CorporalMassIndexCalculator {

    private $patient;
    public function __construct(Patient $patient) {
        $this->patient = $patient;
    }

    public static function calculate(Patient $patient): float {
        
        $squareHeight = $patient->getHeight() * $patient->getHeight();
        $imc = $patient->getWeight() / $squareHeight;
        
        return $imc;
    }
    public static function classify(Patient $patient): string {
    
        $imc = self::calculate($patient);

        if($imc < 18.5) {
            return 'Magreza';
        } else if($imc >= 18.5 && $imc <= 24.9){
            return 'Normal';
        } else if($imc >= 25.0 && $imc <= 29.9) {
            return 'Sobrepeso';
        }  else if($imc >= 30.0 && $imc <= 39.9) {
            return 'Obesidade';
        } else {
            return 'Obesidade Grave';
        }
    }
}