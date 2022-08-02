<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Frengky");
var_dump($company);

$company->programmer = new BackendProgrammer("Frengky");
var_dump($company);

$company->programmer = new FrontendProgrammer("Frengky");
var_dump($company);

sayHelloProgrammer(new Programmer("Frengky"));
sayHelloProgrammer(new BackendProgrammer("Frengky"));
sayHelloProgrammer(new FrontendProgrammer("Frengky"));