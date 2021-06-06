<?php

function calculRate(string $score): string
{
    $rate = '';
    for ($i = 1; $i <= $score; $i++) {
        $rate .= '⭐';
    }
    for ($i = $score + 1; $i <= 5; $i++) {
        $rate .= '⚫';
    }
    return $rate;
}
