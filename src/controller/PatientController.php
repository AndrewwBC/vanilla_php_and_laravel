<?php
declare(strict_types=1);

namespace Tsi\Php\controller;

use Tsi\Php\model\Patient;
use Tsi\Php\utils\CorporalMassIndexCalculator;


class PatientController {
   

    public function calculateImc(Patient $patient, CorporalMassIndexCalculator $corporalMassIndexCalculator){
        
        $imc = $corporalMassIndexCalculator->calculate($patient);
        print_r("\n" . 'Seu IMC: '. $imc . "\n");
    }

    public function classifyByImc(Patient $patient, CorporalMassIndexCalculator $corporalMassIndexCalculator) {
        print_r('Classificação: '. $corporalMassIndexCalculator->classify($patient));
    }


}