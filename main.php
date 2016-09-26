<?php
use Acme\Person;
use Acme\Business;
use Acme\Staff;

$chris   = new Person('Chris');
$staff   = new Staff([$chris]);
$company = new Business($staff);

$company->hire(new Person('Joe Mustermann'));

var_dump($company->getStaffMembers());