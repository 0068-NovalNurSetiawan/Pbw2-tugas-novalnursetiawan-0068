<?php
require_once "Category.php";

$objkCategory = new Category();
//untuk instan var tidak lagi menggunakan seperti ini
//$objCategory->name="handphone";
$objkCategory->setName("Handphone");
$objkCategory->setExpensive(true);
//akses data
echo "Name : {$objkCategory->getName()}" . PHP_EOL;
echo "Expensive : {$objkCategory->IsExpensive()}" . PHP_EOL;