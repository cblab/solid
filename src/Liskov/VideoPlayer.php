<?php

/**
Let q(x) be a property provable about objects of type T.
Then q(y) should be provable for objects y of type S
where S is a subtype of T.

-> Derived classed must be substitutable for their base class
 */

namespace Acme\Liskov;

class VideoPlayer  {

    public function play() {
        // do something
    }
}

class AviVideoplayer extends VideoPlayer  {

    public function play($file) {

        if ( pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new \Exception(); // violate LSP
        }

    }

}