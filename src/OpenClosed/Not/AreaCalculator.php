<?php

namespace Acme\OpenClosed\Not;

// broken open closed principle
class AreaCalculator {

    public function calculate(array $shapes) {
        $area = 0;

        foreach($shapes as $shape) {

            if(is_a($shape, 'Square')) {
                $area[] = $shape->height * $shape->width;
            } elseif(is_a($shape, 'Circle'))  {
                $area[] = $shape->radius * $shape->radius * pi();
            }//...


        }

        return array_sum($area);
    }


}