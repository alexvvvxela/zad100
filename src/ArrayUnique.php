<?php

namespace alexv\zad10tests;

class ArrayUnique
{
    private array $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }
 
    public function arrayUnique(): array
    {
        $uniqueArray = [];
        foreach ($this->array as $value) {
            if (!in_array($value, $uniqueArray)) {
                $uniqueArray[] = $value;
            }
        }
        return $uniqueArray;
    }
}
