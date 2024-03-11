<?php

namespace Tsi\Php\traits;

trait PatientPlan {

    public function verifyPlan(){

        if($this->patientPlan) {
            echo $this->patientPlan;
            return $this->patientPlan;
        }

    }
}