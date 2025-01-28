<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class User
{
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string $role;
    private string $createdAt;

    public function __construct(
        int $id,
        string $username,
        string $email,
        string $password,
        string $role,
        string $createdAt
    ) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->createdAt = $createdAt;
    }

    // Getters
    public function getId(): int { return $this->id; }
    public function getUsername(): string { return $this->username; }
    public function getEmail(): string { return $this->email; }
    public function getPassword(): string { return $this->password; }
    public function getRole(): string { return $this->role; }
    public function getCreatedAt(): string { return $this->createdAt; }

    // Setters
    public function setId(int $id): void { $this->id = $id; }
    public function setUsername(string $username): void { $this->username = $username; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setPassword(string $password): void { $this->password = $password; }
    public function setRole(string $role): void { $this->role = $role; }
    public function setCreatedAt(string $createdAt): void { $this->createdAt = $createdAt; }
}