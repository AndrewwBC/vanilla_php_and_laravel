<?php

include '../utils/Autoload.php';

use model\Patient;
use controller\PatientController;

$patient = new Patient('Andrew', 22, 60.12, 1.70);

var_dump($patient);






