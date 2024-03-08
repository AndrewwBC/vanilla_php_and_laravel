<?php
declare(strict_types=1);
include '../utils/Autoload.php';

use model\Patient;
use controller\PatientController;
use utils\CorporalMassIndexCalculator;

$patient = new Patient('Andrew', 22, 88.12, 1.70);
$corporalMassIndexCalculator = new CorporalMassIndexCalculator($patient);

$pc = new PatientController($patient, $corporalMassIndexCalculator);

$pc->calculateImc();
$pc->classifyByImc();






