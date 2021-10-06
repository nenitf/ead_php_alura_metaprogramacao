<?php

namespace Alura\Reflection;

final class ClasseExemplo implements \JsonSerializable
{
    /**
     * @Column(type="string", length=255)
     */
    @@Atributo(22)
    public string $propriedadePublica = 'publica';
    protected string $propriedadeProtegida = 'protegida';
    private string $propriedadePrivada = 'privada';

    public function __construct()
    {
        echo 'Executando construtor de ' . __CLASS__;
    }

    /**
     * @param ClasseExemplo $mensagem
     * @param int $numero
     * @throws \Exception quando algo der errado
     */
    public function umMetodoPublico(ClasseExemplo $mensagem, int $numero = 42): void
    {
        echo 'Executando método público: ' . $mensagem . $numero . PHP_EOL;
    }

    protected function metodoProtegido(): int
    {
        echo 'Executando método protegido';
        return 1;
    }

    private function metodoPrivado(int $a): void
    {
        echo 'Executando método privado';
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
