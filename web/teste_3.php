<?php
class Person {
    /** @var int */
    private $id;
    /** @var string */
    private $name;
    /** @var int */
    private $age;

    /**
     * Person constructor.
     * @param int $id
     * @param string $name
     * @param int $age
     */
    public function __construct(int $id, string $name, int $age)
    {
        $this->setId($id);
        $this->setName($name);
        $this->setAge($age);
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}

$persons= [
    new Person(2, 'Mohamed', 35),
    new Person(2, 'Issam', 40),
    new Person(2, 'Karim', 20),
    new Person(2, 'Hassan', 25),
    new Person(2, 'Adil', 28),
];

// Asc sort
usort($persons,function($first,$second){
    return $first->getAge() > $second->getAge();
});
print_r($persons);