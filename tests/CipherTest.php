<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use alexv\zad10tests\Cipher;

class CipherTest extends TestCase
{
    public function testRusText()
    {
        $text = "привет";
        $key = 2;
        $expected = "трибгв";
        $this->assertEquals($expected, Cipher::cipher($text, $key));
    }
    public function testTwoText()
    {
        $text = "hello, привет!";
        $key = 4;
        $expected = "lipps, тсжвйи!";
        $this->assertEquals($expected, Cipher::cipher($text, $key));
    }
    public function testEngText()
    {
        $text = "hello";
        $key = 3;
        $expected = "khoor";
        $this->assertEquals($expected, Cipher::cipher($text, $key));
    }
}