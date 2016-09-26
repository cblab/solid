<?php

namespace Acme\OpenClosed\Not;

class AreaCalculator {

    public function calculate(array $squares) {
        $area = 0;

        foreach($squares as $square) {
            $area[] = $square->height * $square->width;
        }

        return array_sum($area);
    }


}