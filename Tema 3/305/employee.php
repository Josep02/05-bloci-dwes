<?php
class Employee {
    private string $name;
    private string $lastname;
    private int $salary;

    public function __construct($name, $lastname, $salary) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->salary = $salary;
    }

    public function getFullName(): string {
        return $this->name . " " . $this->lastname;
    }

    public function mustPayTaxes(): bool {
        if ($this->salary > 3333) {
            return true;
        } else {
            return false;
        }
    }


    public function getName(): string {
        return $this->name;
    }
    public function setName(string $name): void {
        $this->name = $name;
    }
    public function getSurname(): string {
        return $this->lastname;
    }
    public function setSurname(string $lastname): void {
        $this->lastname = $lastname;
    }
    public function getSalary(): int {
        return $this->salary;
    }
    public function setSalary(int $salary): void {
        $this->salary = $salary;
    }
}
?>