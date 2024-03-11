<?php
declare(strict_types=1);

require "../../vendor/autoload.php";

use Tsi\Php\controller\PatientController;
use Tsi\Php\model\Patient;
use Tsi\Php\model\PremiumPatient;
use Tsi\Php\utils\CorporalMassIndexCalculator;


$patient = new Patient('Andrew', 22, 88.12, 1.70);
$corporalMassIndexCalculator = new CorporalMassIndexCalculator($patient);

echo $patient->verifyPlan();

$pc = new PatientController();
    
// $pc->calculateImc($patient, $corporalMassIndexCalculator);
// $pc->classifyByImc($patient, $corporalMassIndexCalculator);


// echo '<pre>';
// echo $patient->__toString();
// echo '</pre>';


// $premiumPatient = new PremiumPatient('Andrew', 22, 88.12, 1.70, '20%');

// echo $premiumPatient->__toString();





