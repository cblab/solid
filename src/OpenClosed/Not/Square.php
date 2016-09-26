<?php

namespace Acme\OpenClosed\Not;

class Square {
    public $height;
    public $width;

    function __construct($width, $height) {
        $this->height = $height;
        $this->width  = $width;
    }

}