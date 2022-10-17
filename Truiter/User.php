<?php
class User {
    private string $name;
    private string $username;
    private DateTime $createdAt;

    function __construct($name, $username) {
        $this->name = $name;
        $this->username = $username;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getUsername(): string {
        return $this->username;
    }

    public function setUsername(string $username): void {
        $this->username = $username;
    }

    public function getCreatedAt(): DateTime {
        return $this->createdAt = new DateTime;
    }

    public function setCreatedAt(DateTime $createdAt): void {
        $this->createdAt = $createdAt;
    }
}