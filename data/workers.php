<?php

abstract class Darbuotojas {
    protected $vardas;
    protected $pareigos;

    public function __construct($vardas, $pareigos) {
        $this->vardas = $vardas;
        $this->pareigos = $pareigos;
    }
    public function getVardas() {
        return $this->vardas;
    }

    public function setVardas($vardas) {
        $this->vardas = $vardas;
    }

    public function getPareigos() {
        return $this->pareigos;
    }

    public function setPareigos($pareigos) {
        $this->pareigos = $pareigos;
    }

    public function getVarda() {
        return $this->vardas;
    }

    public function getPareigas() {
        return $this->pareigos;
    }

    abstract public function dirbti();
}

class Programuotojas extends Darbuotojas {
    public function dirbti() {
        return $this->vardas . " programuoja.";
    }
}

class Testeris extends Darbuotojas {
    public function dirbti() {
        return $this->vardas . " testuoja.";
    }
}

class Vadovas extends Darbuotojas {
    public function dirbti() {
        return $this->vardas . " vadovauja.";
    }
}

?>
