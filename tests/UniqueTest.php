<?php

use PHPUnit\Framework\TestCase;
use alexv\zad10tests\ArrayUnique;


class ArrayUniqueTest extends TestCase
{
    public function ArrayUniqueTest1()
    {
        $input = ['apple', 'banana', 'apple', 'orange', 'banana'];
        $arrayUnique = new ArrayUnique($input);

        $expected = ['apple', 'banana', 'orange'];
        $result = $arrayUnique->arrayUnique();

        $this->assertEquals($expected, $result);
    }

    public function ArrayUniqueOne()
    {
        $input = ['apple', 'banana', 'orange'];
        $arrayUnique = new ArrayUnique($input);

        $expected = ['apple', 'banana', 'orange'];
        $result = $arrayUnique->arrayUnique();

        $this->assertEquals($expected, $result);
    }


    public function ArrayUniqueTest3()
    {
        $input = [1, 2, 1, 2, 3];
        $arrayUnique = new ArrayUnique($input);

        $expected = [1, 2, 3];
        $result = $arrayUnique->arrayUnique();

        $this->assertEquals($expected, $result);
    }
}
