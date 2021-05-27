<?php
declare(strict_types=1);

include_once 'Class/Director.php';
include_once 'Class/Manager.php';
include_once 'Class/Developer.php';
include_once 'Class/Tester.php';

$developer = new Developer('Paul', 'Johnson');
$developer->setSalary(30);
$developer->setProgLanguages('JavaScript', 'TypeScript', 'PHP');
$developer->setWebinarThemes('TDD', 'Performance');
echo $developer->getInfo();
echo PHP_EOL;

$director = new Director('Torres', 'Williams');
//$director->setSalary(45);
$director->setCanManage('manager', 'developer', 'tester');
echo $director->getInfo();
echo PHP_EOL;

$manager = new Manager('Anna', 'Stevens');
$manager->setSalary(35);
$manager->setCanManage('developer', 'tester');
echo $manager->getInfo();
echo PHP_EOL;

$tester = new Tester('Steven', 'Summers');
$tester->setSalary(25);
echo $tester->getInfo();
echo PHP_EOL;

echo Employee::getOrganisationInfo();