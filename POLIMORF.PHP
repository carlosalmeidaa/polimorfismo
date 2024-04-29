<?php

class Animal {
    public function emitirSom() {
        echo "Som genérico de animal<br>";
    }

    // Sobrecarga
    public function emitirSom($volume) {
        echo "Som genérico de animal com volume $volume<br>";
    }
}

class Cachorro extends Animal {
    // Sobrescrita: método emitirSom() sobrescreve o método da classe Animal
    public function emitirSom() {
        echo "Au au!<br>";
    }
}

class Gato extends Animal {
    // Sobrescrita: método emitirSom() sobrescreve o método da classe Animal
    public function emitirSom() {
        echo "Miau!<br>";
    }
}

$animais = [new Cachorro(), new Gato()];

// Sobrescrita
foreach ($animais as $animal) {
    $animal->emitirSom(); 
}

// Sobrecarga
$animal = new Animal();
$animal->emitirSom(10);

?>