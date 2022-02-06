<?php
function fibonacci()
{
    $fib = [0, 1];
    for ($i = 2; $i < 10; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
};

function bracket()
{
    $a = (1 + 1) * 2;
    echo 'bracket = ' . $a . '<br>';
};

function division()
{
    $a = 10 / 2;
    echo 'division = ' . $a . '<br>';
};

function multiplication()
{
    $a = 11 * 2;
    echo 'multiplication = ' . $a . '<br>';
};

function addition()
{
    $a = 1 + 1 + 2;
    echo 'addition = ' . $a . '<br>';
};

function sub()
{
    $a = 1 - 1 - 2;
    echo 'sub = ' . $a . '<br>';
};

function optional($a, $b, $c = 0)
{
    echo $a + $b + $c;
};
