<?php 

class Passenger {
    // Estes são os atributos, "Atributos Privados"
    private $name;
    private $age;
    private $seatNumber;

    // Construtor para inicializar os atributos
    public function __construct($name, $age, $seatNumber) {
        $this->name = $name;
        $this->age = $age;
        $this->seatNumber = $seatNumber;
    }

    // Método "get" para acessar os atributos
    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSeatNumber() {
        return $this->seatNumber;
    }
    
    // Método "set" para atualizar os atributos
    public function setSeatNumber($seatNumber) {
        $this->seatNumber = $seatNumber;
    }
}

// Exemplo de uso da classe Passenger (Criei um novo objeto)
$passenger = new Passenger("Thais", 31, 121);

// Exibir informações do passageiro
echo "Nome: " . $passenger->getName() . "<br>";
echo "Idade: " . $passenger->getAge() . "<br>";
echo "Nº do Ticket: " . $passenger->getSeatNumber() . "<br>";

// Atualizar nº do ticket
$passenger->setSeatNumber(212);

// Exibir informações atualizadas
echo "Número de ticket atualizado: " . $passenger->getSeatNumber() . "<br>";
