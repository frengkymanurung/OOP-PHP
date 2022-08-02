<?php

$matches = [];
$result = preg_match_all("/kyy|srt|mnrg/i", "Frngky Soritua Manuurng", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "Frngky Soritua Manuurng,Programmer,Pemula-Ya");

var_dump($result);