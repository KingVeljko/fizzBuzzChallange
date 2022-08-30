<?php

namespace App\Tests;

use App\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class FizzBuzzServiceTest extends TestCase
{
    /**
     * @var FizzBuzzService
     */
    private $fizzBuzzService;

    public function setUp(): void
    {
        $this->fizzBuzzService = new FizzBuzzService();
    }

    /**
     * @dataProvider getFizzBuzzOutputDataTests
     */
    public function testGetFizzBuzzOutput(array $expectedDataOutput)
    {
        $fizzBuzzOutput = $this->fizzBuzzService->getFizzBuzzOutput();
        $this->assertIsArray($fizzBuzzOutput);
        $this->assertSame($fizzBuzzOutput[3], FizzBuzzService::FIZZ . PHP_EOL);
        $this->assertSame($fizzBuzzOutput[5], FizzBuzzService::BUZZ . PHP_EOL);
        $this->assertSame($fizzBuzzOutput[15], FizzBuzzService::FIZZ . FizzBuzzService::BUZZ . PHP_EOL);
        $this->assertSame($expectedDataOutput, $fizzBuzzOutput);
    }

    public function getFizzBuzzOutputDataTests(): array
    {
        return [
            [
                [
                    1 => "1\n",
                    2 => "2\n",
                    3 => "Fizz\n",
                    4 => "4\n",
                    5 => "Buzz\n",
                    6 => "Fizz\n",
                    7 => "7\n",
                    8 => "8\n",
                    9 => "Fizz\n",
                    10 => "Buzz\n",
                    11 => "11\n",
                    12 => "Fizz\n",
                    13 => "13\n",
                    14 => "14\n",
                    15 => "FizzBuzz\n",
                    16 => "16\n",
                    17 => "17\n",
                    18 => "Fizz\n",
                    19 => "19\n",
                    20 => "Buzz\n",
                    21 => "Fizz\n",
                    22 => "22\n",
                    23 => "23\n",
                    24 => "Fizz\n",
                    25 => "Buzz\n",
                    26 => "26\n",
                    27 => "Fizz\n",
                    28 => "28\n",
                    29 => "29\n",
                    30 => "FizzBuzz\n",
                    31 => "31\n",
                    32 => "32\n",
                    33 => "Fizz\n",
                    34 => "34\n",
                    35 => "Buzz\n",
                    36 => "Fizz\n",
                    37 => "37\n",
                    38 => "38\n",
                    39 => "Fizz\n",
                    40 => "Buzz\n",
                    41 => "41\n",
                    42 => "Fizz\n",
                    43 => "43\n",
                    44 => "44\n",
                    45 => "FizzBuzz\n",
                    46 => "46\n",
                    47 => "47\n",
                    48 => "Fizz\n",
                    49 => "49\n",
                    50 => "Buzz\n",
                    51 => "Fizz\n",
                    52 => "52\n",
                    53 => "53\n",
                    54 => "Fizz\n",
                    55 => "Buzz\n",
                    56 => "56\n",
                    57 => "Fizz\n",
                    58 => "58\n",
                    59 => "59\n",
                    60 => "FizzBuzz\n",
                    61 => "61\n",
                    62 => "62\n",
                    63 => "Fizz\n",
                    64 => "64\n",
                    65 => "Buzz\n",
                    66 => "Fizz\n",
                    67 => "67\n",
                    68 => "68\n",
                    69 => "Fizz\n",
                    70 => "Buzz\n",
                    71 => "71\n",
                    72 => "Fizz\n",
                    73 => "73\n",
                    74 => "74\n",
                    75 => "FizzBuzz\n",
                    76 => "76\n",
                    77 => "77\n",
                    78 => "Fizz\n",
                    79 => "79\n",
                    80 => "Buzz\n",
                    81 => "Fizz\n",
                    82 => "82\n",
                    83 => "83\n",
                    84 => "Fizz\n",
                    85 => "Buzz\n",
                    86 => "86\n",
                    87 => "Fizz\n",
                    88 => "88\n",
                    89 => "89\n",
                    90 => "FizzBuzz\n",
                    91 => "91\n",
                    92 => "92\n",
                    93 => "Fizz\n",
                    94 => "94\n",
                    95 => "Buzz\n",
                    96 => "Fizz\n",
                    97 => "97\n",
                    98 => "98\n",
                    99 => "Fizz\n",
                    100 => "Buzz\n",
                ]
            ]
        ];
    }
}
