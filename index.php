<?php

class User {
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
}


class Employee extends User {
    public $salary;

    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);
        $this->salary = $salary;
    }
}


class City {
    public $name;
    public $population;

    public function __construct($name, $population) {
        $this->name = $name;
        $this-> population = $population;
    }
}


$arr[] = new User('john', 'smitt');
$arr[] = new User('eric', 'Kripce');
$arr[] = new User('kyle', 'Loposn');
$arr[] = new Employee('Yura', 'Koval', 500);
$arr[] = new Employee('Serg', 'Volas', 300);
$arr[] = new Employee('Maks', 'Padaleke', 800);
$arr[] = new City('Moscow', '20000');
$arr[] = new City('Kiev', '10000');
$arr[] = new City('Bern', '18420');

foreach ($arr as $item) {
    //name тех объектов, которые принадлежат классу User или потомку этого класса
    if ($item instanceof Employee) {
        echo $item->name.'<br>';
    }
    // name тех объектов, которые не принадлежат классу User или потомку этого класса
    if (!($item instanceof User)) {
        echo $item->name.'<br>';
    }

    //name тех объектов, которые принадлежат именно классу User, то есть не классу City и не классу Employee
    if (!($item instanceof Employee) and !($item instanceof City)) {
        echo $item->name.'<br>';
    }

}





?>