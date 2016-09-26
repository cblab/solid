<?php

namespace Acme\OpenClosed;

class Circle implements iShape{
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return $this->radius * $this->radius * pi();
    }

}