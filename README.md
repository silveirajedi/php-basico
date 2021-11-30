# php - Básico

###### Códigos sobre o básico da linguagem PHP

### Criando o Ambiente com Docker:

- Docker (https://docs.docker.com/get-docker/)

- Baixar imagem do php 7.4 + apache:
```bash
docker pull php:7.4-apache
```

- Executar o container em modo foreground 
```bash
docker container run -d -p 80:80 --name phpbasico -v $(pwd):/var/www/html php:7.4-apache
```

- Executar o container em modo interativo
```bash
docker container run -it -p 80:80 --name phpbasico -v $(pwd):/var/www/html php:7.4-apache /bin/bash
```

- Instalar o Xdebug
```bash
pecl install xdebug
```
```bash
echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20190902/xdebug.so" >> /usr/local/etc/php/php.ini-development
```

```bash
mv /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini
```
### Glossário:

- 001 - Introdução a estrutura do PHP
- 002 - Comandos Saídas
- 003 - Tipos Variáveis
- 004 - Operadores
- 005 - Array e Vetores
- 006 - Estruturas de Controles
- 007 - Estruturas de Repetição
- 008 - Closures e Generators
- 009 - Require e Include de Arquivos
- 010 - Funções
- 011 - Constantes
- 012 - Manipulação de String

### Credits

- [Leandro Silveira](https://github.com/silveirajedi) (Developer)

### License

The MIT License (MIT).
