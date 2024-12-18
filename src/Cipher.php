<?php

namespace alexv\zad10tests;

class Cipher
{
    public static function Cipher(string $text, int $key): string
    {
        $russianAlphabet = 'абвгдежзийклмнопрстуфхцчшщъыьэюя';
        $russianAlphabetArray = preg_split('//u', $russianAlphabet, -1, PREG_SPLIT_NO_EMPTY);

        $englishAlphabet = range('a', 'z');

        $textChars = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

        $result = '';
        for ($i = 0; $i < count($textChars); $i++) {
            $symbol = $textChars[$i];
            $currentAlphabet = $englishAlphabet;
            if (in_array($symbol, $russianAlphabetArray)) {
                $currentAlphabet = $russianAlphabetArray;
            }
            if (in_array($symbol, $currentAlphabet)) {
                $currentIndex = array_search($symbol, $currentAlphabet);
                $newIndex = ($currentIndex + $key) % count($currentAlphabet);
                if ($newIndex < 0) {
                    $newIndex += count($currentAlphabet);
                }
                $result .= $currentAlphabet[$newIndex];
            } else {
                $result .= $symbol;
            }
        }
        return $result;
    }
}
