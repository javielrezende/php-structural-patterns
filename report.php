<?php

use PersonalProjects\DesignPattern\Budget;
use PersonalProjects\DesignPattern\Report\ExportedBudget;
use PersonalProjects\DesignPattern\Report\ExportedXmlFile;
use PersonalProjects\DesignPattern\Report\ExportedZipFile;

require "vendor/autoload.php";

$budget = new Budget();
$budget->value = 500;
$budget->quantityItens = 7;

$budgetExported = new ExportedBudget($budget);
$budgetExportedXml = new ExportedXmlFile('orçamento');
$budgetExportedZip = new ExportedZipFile('orçamaneto.array');

echo $budgetExportedZip->export($budgetExported);