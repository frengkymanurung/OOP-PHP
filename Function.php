<?php

require_once "data/Person.php";

$frengky = new Person("Frengky", "Medan");
$frengky->name = "Frengky";
$frengky->sayHello("Budi");

$joko = new Person("Joko", "Cirebon");
$joko->name = "Joko";
$joko->sayHello(null);

$frengky->info();
$joko->info();