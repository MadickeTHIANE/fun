<?php
function fib(int $x): int
{
        if ($x == 0) {
                return 1;
        } elseif ($x == 1) {
                return 1;
        } else {
                return fib($x - 1) + fib($x - 2);
        }
}

