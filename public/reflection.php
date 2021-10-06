<?php

use Alura\Reflection\ClasseExemplo;

require_once __DIR__ . '/vendor/autoload.php';

$reflectionClass = new ReflectionClass(ClasseExemplo::class);

$propriedadePrivada = $reflectionClass->getProperty('propriedadePrivada');

if (!$propriedadePrivada->isPublic()) {
    $propriedadePrivada->setAccessible(true);
}

var_dump($propriedadePrivada->getValue($reflectionClass->newInstanceWithoutConstructor()));

// ---------------------------------------- Métodos: -----------------------------------


$reflectionMethod = $reflectionClass->getMethod('metodoProtegido');
$reflectionMethod->setAccessible(true);
var_dump($reflectionMethod->invoke($reflectionClass->newInstanceWithoutConstructor()));

/*$parameters = array_filter(
    $reflectionMethod->getParameters(),
    fn (ReflectionParameter $parameter) => !$parameter->isOptional()
);

foreach ($parameters as $parameter) {
    if (!$parameter->hasType()) {
        throw new DomainException('Não sei o que fazer aqui');
    }

    $tipo = (string) $parameter->getType();
    var_dump($tipo, $parameter->getType()->isBuiltin());
}

$objetoClasseExemplo = $reflectionClass->newInstanceWithoutConstructor();

// $reflectionMethod->invokeArgs($objetoClasseExemplo, ['Mensagem qualquer ', 42]);
*/