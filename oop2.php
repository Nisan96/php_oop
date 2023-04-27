<?php
require 'oop1.php';

$a = (float)readline('Enter a amount:');
$b = (float)readline('Enter a amount:');
$c = (float)readline('Enter a amount:');

$trans = new Transaction($a,'tnx-1');
$trans1 = new Transaction($b,'tnx-2');
$trans2 = new Transaction($c,'tnx-3');

$t = (float)readline("How much Percentage of tax you want to deduct:");
#$trans -> deductTax($t);

$d = (float)readline("How much Percentage of discount you want to give:");
#$trans -> applyDiscount($d);
echo PHP_EOL;
# Method Chaining
echo $trans -> deductTax($t) -> applyDiscount($d) -> getAmount();
echo PHP_EOL;
echo $trans1 -> deductTax($t) -> applyDiscount($d) -> getAmount();
echo PHP_EOL;
echo $trans2 -> deductTax($t) -> applyDiscount($d) -> getAmount();
echo PHP_EOL;


#$trans ->amount = 20;

#var_dump(Transaction::$amount);

#var_dump($trans);
/*var_dump($trans->getAmount());
var_dump($trans->getDescription());
#var_dump($trans1);
var_dump($trans1->getAmount());
var_dump($trans1->getDescription());
#var_dump($trans2);
var_dump($trans2->getAmount());
var_dump($trans2->getDescription());*/


echo "Net Payable Amount:", $trans->getAmount();
echo PHP_EOL;
echo "Net Payable Amount:", $trans2->getAmount();
echo PHP_EOL;
echo "Net Payable Amount:", $trans1->getAmount();
echo PHP_EOL;

#var_dump($trans -> $Transaction);
/*var_dump($trans);
var_dump($trans1);
var_dump($trans2);*/