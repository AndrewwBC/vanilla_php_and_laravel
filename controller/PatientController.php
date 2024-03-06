<?php
declare(strict_types=1);
namespace controller;

use model\Patient;
use utils\CorporalMassIndexCalculator;

class PatientController {
   
    private Patient $patient;
    private CorporalMassIndexCalculator $corporalMassIndexCalculator;

    private float $imc;

    public function __construct(Patient $patient, CorporalMassIndexCalculator $corporalMassIndexCalculator) {
        $this->patient = $patient;
        $this->corporalMassIndexCalculator = $corporalMassIndexCalculator;
    }

    public function calculateImc(){
        
        $this->imc = $this->corporalMassIndexCalculator->calculate($this->patient);
        print_r("\n" . 'Seu IMC: '. $this->imc . "\n");
    }

    public function classifyByImc() {
        print_r('Classificação: '. $this->corporalMassIndexCalculator->classify($this->patient));
    }

}