<?php declare(strict_types=1);

class Author
{
    public function __construct(public string $firstName, public string $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        var_dump($this->firstName, $this->lastName);
    }
}
