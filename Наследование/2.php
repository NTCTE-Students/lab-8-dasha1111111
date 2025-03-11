<?php
class Employee {
    public $name;
    public $salary;
    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function getInfo() {
        return "{$this->name}, Salary: {$this->salary}";
    }
}
class Manager extends Employee {
    public function manageTeam() {
        return "{$this->name} is managing the team.";
    }
}
class Developer extends Employee {
    public function writeCode() {
        return "{$this->name} is writing code.";
    }
}
class Designer extends Employee {
    public function design() {
        return "{$this->name} is designing a new project.";
    }
}
// Пример использования:
$manager = new Manager("John Doe", 5000);
$developer = new Developer("Alice Smith", 4500);
$designer = new Designer("Bob Johnson", 4000);

echo $manager->getInfo() . "\n" . $manager->manageTeam() . "\n";
echo $developer->getInfo() . "\n" . $developer->writeCode() . "\n";
echo $designer->getInfo() . "\n" . $designer->design() . "\n";
?>
