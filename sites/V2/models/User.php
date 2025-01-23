<?php
class User {
    // Propriétés correspondant aux colonnes de la table
    private ?int $id;
    private ?string $email;
    private ?string $first_name;
    private ?string $last_name;

    // Constructeur
    public function __construct(?int $id = null, ?string $email = null, ?string $first_name = null, ?string $last_name = null) {
        $this->id = $id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getFirstName(): ?string {
        return $this->first_name;
    }

    public function getLastName(): ?string {
        return $this->last_name;
    }

    // Setters
    public function setId(?int $id): void {
        $this->id = $id;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setFirstName(?string $first_name): void {
        $this->first_name = $first_name;
    }

    public function setLastName(?string $last_name): void {
        $this->last_name = $last_name;
    }
}