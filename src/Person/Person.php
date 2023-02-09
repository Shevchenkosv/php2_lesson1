<?php

namespace Geekbrains\LevelTwo\Person;

use Geekbrains\LevelTwo\Person\Name;

class Person
{
    private Name $name;
    private \DateTimeImmutable $registeredOn;

    /**
     * @param Name $name
     * @param \DateTimeImmutable $registeredOn
     */
    public function __construct(Name $name, \DateTimeImmutable $registeredOn)
    {
        $this->name = $name;
        $this->registeredOn = $registeredOn;
    }

    public function __toString()
    {
        return $this->name . '(на сайте с' . $this->registeredOn->format('Y-m-d') . ')';
    }
}

