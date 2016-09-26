<?php

namespace Acme;

class Person {

    protected $name = '';

    /**
     * Person constructor.
     */
    public function __construct($name) {
        $this->name  = $name;
    }

}