<?php
require 'oop1.php';

$a = (float)readline('Enter a amount:');

$t = (float)readline("How much Percentage of tax you want to deduct:");

$d = (float)readline("How much Percentage of discount you want to give:");

$tran = (new Transaction($a,'tnx-1')); #->deductTax($t)-> applyDiscount($d)-> getAmount();

echo $tran ->deductTax($t)-> applyDiscount($d)-> getAmount();
echo PHP_EOL;
  
var_dump($tran);