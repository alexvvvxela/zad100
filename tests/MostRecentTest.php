<?php

use PHPUnit\Framework\TestCase;
use alexv\zad10tests\MostRecent;

class MostRecentTest extends TestCase
{
    public function testMostRecentZnakiBukvi()
    {
        $input = "HH uu ffff hhhhhh";
        $analyzer = new MostRecent($input);
        
        $expected = 'hhhhhh';
        $result = $analyzer->mostRecent();
        
        $this->assertEquals($expected, $result);
    }

    public function testMostRecentZnaki()
    {
        $input = "!@#$%^&*()";
        $analyzer = new MostRecent($input); 
        
        $expected = '';
        $result = $analyzer->mostRecent();
        
        $this->assertEquals($expected, $result);
    }

    public function testMostRecentCifri()
    {
        $input = "123 123 456 123";
        $analyzer = new MostRecent($input); 
        
        $expected = '123';
        $result = $analyzer->mostRecent();
        
        $this->assertEquals($expected, $result);
    }
}