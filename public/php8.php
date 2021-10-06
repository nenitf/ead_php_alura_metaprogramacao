<?php

use Alura\Reflection\ClasseExemplo;

require_once 'vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);
try {
    $propriedade = $reflectionClass->getProperty('propriedadePublic');
    var_dump($propriedade->getAttributes()[0]->getName());
} catch (ReflectionException $e) {
    echo $e->getMessage();
}
