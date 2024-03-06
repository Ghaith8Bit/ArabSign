<?php

namespace App\DTO;

class CategoryDto
{
    private ?string $name;


    public function __construct(?string $name)
    {
        $this->name = strtolower($name);
    }
    public function setName(string $name) : self
    {
        $this->name = strtolower($name);
        return $this;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function toArray() : array
    {
        return [
            'name' => $this->name,
        ];
    }
}
