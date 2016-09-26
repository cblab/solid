<?php
namespace Acme;

class Staff {
    protected $members = [];

    /**
     * Staff constructor.
     * @param array $members
     */
    public function __construct(array $members = []) {
        $this->members = $members;
    }

    /**
     * @param Person $person
     */
    public function add(Person $person) {
        $this->members[] = $person;
    }

    /**
     * @return array
     */
    public function members() {
        return $this->members;
    }



}