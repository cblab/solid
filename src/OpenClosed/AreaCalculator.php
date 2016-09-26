<?php

namespace Acme\OpenClosed;

// open closed principle
// Seperate extensible behavior behind an interface and flip the dependencies.
class AreaCalculator {

    public function calculate(array $shapes) {
        $area = 0;

        foreach($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }


}