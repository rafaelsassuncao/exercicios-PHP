<?php

class Contact {
    // Atributos privados
    private $name;
    private $email;
    private $phone;

    // Construtor para inicializar os atributos
    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    // Métodos getter para acessar os atributos
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    // Métodos setter para atualizar os atributos
    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }
}

// Exemplo de uso da classe Contact
$contact = new Contact("Rafael", "rafael@example.com", "555-1234");

// Exibir informações do contato
echo "Nome: " . $contact->getName() . "<br>";
echo "Email: " . $contact->getEmail() . "<br>";
echo "Telefone: " . $contact->getPhone() . "<br>";

// Atualizar o email e telefone
$contact->setEmail("novoemail@example.com");
$contact->setPhone("555-5678");

// Exibir as informações atualizadas
echo "Email atualizado: " . $contact->getEmail() . "<br>";
echo "Telefone atualizado: " . $contact->getPhone() . "<br>";


