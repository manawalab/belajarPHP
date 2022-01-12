<?php
namespace data;
class shape {
    public function getcorner () {
        return 0;

    }
}

class rectangle extends shape {
    public function getcorner () {
        return 4;
    
        
}

public function getparentcorner () {

    return $this->getcorner();
    return parent::getcorner();

}
}