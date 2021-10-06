# ead_php_alura_refatoracao

> Projeto referente a [este](https://cursos.alura.com.br/course/metaprogramacao-php-api-reflection) curso.

1. Crie o ambiente
```sh
docker-compose up -d
```
> Caso queira, ao final da configuração, pare o Docker com ``docker-compose down``

2. Crie o autoloader
```sh
docker-compose exec app composer du
```

## Execução

- Caso recém tenha feito a **configuração inicial** e o ambiente continue rodando, tudo certo. Pode acessar ``localhost:8989/arquivo-script.php``
- Do contrário, suba o ambiente novamente:
```sh
docker-compose up
```
> Pare com <kbd>Ctrl</kbd><kbd>C</kbd>

> Caso modifique Dockerfile, rebuilde com ``docker-compose up --build``

> Para acessar o container use ``docker-compose exec app bash`` ou execute os scripts diretamente pelo Docker ``docker-compose exec app php public/arquivo-script.php``

## Anotações

- *Metaprogramação* é uma técnica em que o programa tem a habilidade de tratar outros programas como dado.
- *Reflection* é a habilidade de uma linguagem de programação ser sua própria linguagem.
