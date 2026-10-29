<?php
//importando a superclasse
require_once "src/Conteudo.php";

//importando a subclasse
require_once "src/Filme.php";

require_once "src/Serie.php";



//criando um OBJETO e passando os dados para o construtor
$filme1 = new Filme('De volta para o futuro','ficção', 1985, 116 );
$filme2 = new Filme('Toy Story', 'Animação', 1995, 105);
$filme3 = new Filme('Homem Aranha', 'Ação', 2026, 145);

$serie1 = new Serie ('Diario de um vampiro', 'drama', 2009, 8);
$serie2 = new Serie ('Originais', 'drama', 2015, 5);


//$filmes = [$filme1, $filme2, $filme3];
//$serie = [$serie1, $serie2];

//objetos filmes e series
$conteudos = [$filme1, $filme2, $serie1, $serie2];

/* Como a classe Conteudo foi definida como abstrata, a linha abaixo
não funcionara pois não é ppossivel criar objetos/instancias diretamente
á partir de classes abstratas */
//$conteudo = new Conteudo('Senhor dos anéis', 'Fantasia', 2001);
//var_dump($conteudo);


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Coleção de Filmes e Séries</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Uma sessão de boas histórias</p>
            <h1>Minha coleção de filmes</h1>
            <p>Três filmes para descobrir, rever e se divertir</p>
        </header>

        <div class="conteudos">
         <?php foreach($conteudos as $conteudo): ?>
            <article class="card-conteudo">
                 <span class="genero"><?= $conteudo->getGenero() ?></span>
                 <h2><?= $conteudo->getTitulo() ?></h2>
                 <p class="ano">Lançamento: <?= $conteudo->getAno() ?></p>

                 <p> <?= $conteudo->getDescricao() ?></p>

                 <?php if($conteudo->ehClassico()):?>
                    <span class="classico">Clássico</span>
                 <?php endif; ?>

            </article>
         <?php endforeach; ?>   
        </div>

        <hr>

        <div class="assuntos-estudados">
            <h2>Assuntos estudados</h2>
            <ul>
              <li>Classe abstrata: <b>Conteudo</b></li>
              <li>Impossibilita de instaciar diretamente uma classe abstrata</li>
              <li>Método abstrato: <b>getDescricao</b></li>
              <li>Obriga a implementação do método absrato pelas classes filhas Filme e Serie</li>
              <li>Polimorfismo: a mesma chmada a <b>getDescricao()</b> utiliza a implementação de cada classe</li>
            </ul>
        </div>

    </div>
</body>

</html>