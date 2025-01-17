<?php
abstract class Person{

    public static int $countOfPeople = 0;

    public function __construct(private string $firstName, private string $lastName){
        self::$countOfPeople++;
    }

    public function getFirstName(): string{
        return $this->firstName;
    }

    public function getLastName(): string{
        return $this->lastName;
    }

    public function setFirstName(string $firstName): void{
        $this->firstName = $firstName;
    }

    public function setLastName(string $lastName): void{
        $this->lastName = $lastName;
    }

    public static function getCountOfPeople(): int{
        return self::$countOfPeople;
    }

    public function __toString(){
        return "$this->firstName $this->lastName";
    }
}

class Developer extends Person{

    public function __construct(string $firstName, string $lastName, private array $stack){
        parent::__construct($firstName, $lastName);
    }

    public function setStack(array $stack): void{
        $this->stack = $stack;
    }

    public function getStack(): array{
        return $this->stack;
    }

    public function work(): void{
        echo "Developer is fixing code(to create new bug)" . PHP_EOL;
    }

    public static function experience_boost(int $number): int {
        return $number * 3;
    }
}

class Manager extends Person{
    public function __construct(string $firstName, string $lastName){
        parent::__construct($firstName, $lastName);
    }
}

//$p1 = new Person("John", "Doe");
$p1 = new Manager("John", "Doe");
$p2 = new Developer("Jane", "Doe", ["Golang", "PHP", "Postgresql", "Redis"]);


//echo print_r($p1, true);
//echo $p1 . PHP_EOL;
echo print_r($p2, true);
$p2->work();

echo Developer::experience_boost(2) . PHP_EOL;
echo Person::$countOfPeople . PHP_EOL;