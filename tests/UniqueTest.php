<?php

use PHPUnit\Framework\TestCase;
use alexv\zad10tests\Uniquet;


class ArrayUniqueTest extends TestCase
{
    public function arrayUniqueTest1()
    {
        $input = ['apple', 'banana', 'apple', 'orange', 'banana'];
        $arrayUnique = new ArrayUnique($input);
        
        $expected = ['apple', 'banana', 'orange'];
        $result = $arrayUnique->arrayUnique();
        
        $this->assertEquals($expected, $result);
    }

    public function arrayUniqueOne()
    {
        $input = ['apple', 'banana', 'orange'];
        $arrayUnique = new ArrayUnique($input);
        
        $expected = ['apple', 'banana', 'orange'];
        $result = $arrayUnique->arrayUnique();
        
        $this->assertEquals($expected, $result);
    }


    public function arrayUniqueTest3()
    {
        $input = [1, 2, 1, 2, 3];
        $arrayUnique = new ArrayUnique($input);
        
        $expected = [1, 2, 3];
        $result = $arrayUnique->arrayUnique();
        
        $this->assertEquals($expected, $result);
    }
}