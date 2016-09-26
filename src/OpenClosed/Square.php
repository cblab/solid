<?php

namespace Acme\OpenClosed;

class Square implements iShape {
    public $height;
    public $width;

    function __construct($width, $height) {
        $this->height = $height;
        $this->width  = $width;
    }

    public function area() {
        return $this->width * $this->height;
    }

}