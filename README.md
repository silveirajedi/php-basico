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

### Glossário:

- 001 - Introdução a estrutura do PHP

### Credits

- [Leandro Silveira](https://github.com/silveirajedi) (Developer)

### License

The MIT License (MIT).
