<?php

namespace App;

class FizzBuzzService
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function getFizzBuzzOutput(): array
    {
        $fizzBuzzOutput = [];

        for ($i = 1; $i <= 100; $i++) {
            $isFizz = (0 === $i % 3);
            $isBuzz = (0 === $i % 5);

            if (!$isFizz && !$isBuzz) {
                $fizzBuzzOutput[$i] = $i . PHP_EOL;
                continue;
            }

            if ($isFizz) {
                $fizzBuzzOutput[$i] = self::FIZZ . PHP_EOL;
            }

            if ($isBuzz) {
                if (array_key_exists($i, $fizzBuzzOutput)) {
                    $fizzBuzzOutput[$i] = self::FIZZ . self::BUZZ . PHP_EOL;
                    continue;
                }

                $fizzBuzzOutput[$i] = self::BUZZ . PHP_EOL;
            }
        }

        return $fizzBuzzOutput;
    }
}