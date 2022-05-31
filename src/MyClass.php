<?php

namespace Packtest;

use MathPHP\Algebra;

class MyClass {
    public function dump($var) {
        var_dump($var);
    }

    public function doMath($num) {
        return Algebra::gcd(8, $num);
    }
}
