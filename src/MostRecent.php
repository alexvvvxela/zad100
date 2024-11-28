<?php

namespace alexv\zad10tests;

class MostRecent
{
    private string $text;

    public function __construct(string $text)
    {
        $this->text = preg_replace('/[^\p{L}\p{N}\s]/ui', '', $text);
    }

    public function MostRecent(): string
    {
        $words = str_word_count(strtolower($this->text), 1);
        $wordCounts = array_count_values($words);

        $mostFrequentWord = "";
        $maxCount = 0;

        foreach ($wordCounts as $word => $count) {
            if ($count > $maxCount) {
                $maxCount = $count;
                $mostFrequentWord = $word;
            }
        }

        return $mostFrequentWord;
    }
}
