<?php

namespace App\Service;

class Slugify
{
    public function generate(string $input) : string
    {
        $specialChar =[" ", "à", "ç", "é", "è", "ù", "ô", "û", "ü", "ö", "ê", "ë", "'", "\"", ".", ";", ",", "?", "!", ")", "(", "{", "}", "[", "]"];
        $simpleChar = ["-", "a", "c", "e", "e", "u", "o", "u", "u", "o", "e", "e", "", "", "", "", "", "", "", "", "", "", "", "", ""];
        $input = rtrim($input);
        $input = ltrim($input);
        $input = str_replace($specialChar, $simpleChar, $input);
        $input = preg_replace('/--+/', '-', $input);
        $input = strtolower($input);
        return $input;
    }
}