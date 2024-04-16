<?php 

get_header();

?>

<section class="docs-page container">
    <h2>Tecnologias utilizadas no projeto</h2>
    <ul>
        <li>Docker</li>
        <li>Gulp</li>
        <li>NPM</li>
    </ul>
    <h2>Live</h2>
    <p>Você pode acessar o projeto live clicando <a target="_blank" href="http://gabri3lmarques.com/digital-olivas">aqui</a>.</p>
    <h2>Como rodar o projeto localmente</h2>
    <p>Para rodar o projeto localmente você vai precisar ter o Docker instalado em seu computador. Além do Docker, também é necessário ter o plugin Docker-compose.</p>
    <p>Você pode checar o site oficial do Docker, clicando <a target="_blank" href="https://www.docker.com/get-started/">aqui</a>.</p>
    <p>Após concluir a instalação do docker você deve clonar o repositório, ou baixar seu arquivo zip.</p>
    <p>Para clonar o projeto utilize o comando abaixo:</p>
    <pre><code>git clone https://github.com/gabri3lmarques/olivas-digital.git</code></pre>
    <p>Acesse a pasta raíz do projeto e digite o seguinte comando:</p>
    <pre><code>sudo docker-compose up -d</code></pre>
    <p>Esse comando vai subir um container local com a correta versão do Wordpress, PHP e MySQL utilizadas no projeto.</p>
    <p>Para testar o tema criado basta descompactar a pasta olivas-theme.zip dentro da pasa themes do Wordpress.</p>
</section>

<?php 

get_footer();

?>

