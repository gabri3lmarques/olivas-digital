# olivas-digital

# Tecnologias utilizadas no projeto

- Docker
- Gulp
- NPM

# Live

Você pode acessar o projeto live clicando [aqui](http://gabri3lmarques.com/digital-olivas).

# Como rodar o projeto localmente

Para rodar o projeto localmente você vai precisar ter o Docker instalado em seu computador. Além do Docker, também é necessário ter o plugin Docker-compose.

Você pode checar o site oficial do Docker, clicando [aqui](https://www.docker.com/get-started/).

Após concluir a instalação do docker você deve clonar o repositório, ou baixar seu arquivo zip.

Para clonar o projeto utilize o comando abaixo:

```
git clone https://github.com/gabri3lmarques/olivas-digital.git
```

Acesse a pasta raíz do projeto e digite o seguinte comando:

```
sudo docker-compose up -d
```

Esse comando vai subir um container local com a correta versão do Wordpress, PHP e MySQL utilizadas no projeto.

Para testar o tema criado basta descompactar a pasta olivas-theme.zip dentro da pasa themes do Wordpress.
 
