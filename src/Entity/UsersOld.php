<?php

class UsersOld
{
    private $id;
    private $email;
    private $password;
    private $firstName;
    private $lastName;

    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getId(): int
    {
        return $this->id;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function setFirstname(string $firstName): void
    {
        $this->firstName = $firstName;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setLastname(string $lastName): void
    {
        $this->lastName = $lastName;
    }
    public function getLastname(): string
    {
        return $this->lastname;
    }

}