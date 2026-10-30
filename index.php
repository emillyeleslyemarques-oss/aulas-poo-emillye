<?php 
use App\Pedidos\Pedido;
use App\Relatorios\Pedido as RelatorioPedido;
use App\Pedidos\StatusPedido;
use App\Saudacao;

//susbstituindo todos os requires manuais de cada arquivo
//Classe, interface, enum por UM UNICO require apontando para o autoload
require_once "vendor/autoload.php";

// Veja que nessa primeira forma, precisamos passar o nome completo da classe
$notificadorPorEmail = new App\Notificacoes\NotificadorEmail();


$pedido1 = new Pedido(1001, "Fulano da Silva", StatusPedido::Pendente);
$pedido2 = new Pedido(1002, "Beltrano Souza", StatusPedido::Pendente);
$pedido3 = new Pedido(1003, "José da Silva", StatusPedido::AguardandoPagamento);
$pedido4 = new Pedido(1004, "Mônica Santos", StatusPedido::SaiuParaEntrega);
$pedido3->setStatus(StatusPedido::Pago);

$pedidos = [$pedido1, $pedido2, $pedido3, $pedido4];


$relatorioPedido = new RelatorioPedido(); 

$saudacao = new Saudacao();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos da loja virtual</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <div class="container">
        <header>
            <p class="destaque">Loja Virtual</p>
            <h1>Pedidos da loja virtual</h1>
            <p>Cada pedido possui um status: Pendente, Aguardando pagamento, Em preparação,
            Pago ou Saiu para entrega.</p>
            <p>Testando a Saudacao: <?= $saudacao->cumprimentar() ?></p>
        </header>

        <div class="conteudos">        
        <?php foreach ($pedidos as $pedido): ?>
         <article class="card-conteudo">
              <h2>Pedido # <?= $pedido->getNumero() ?></h2>
              <p>Cliente: <?= $pedido->getCliente() ?></p>
                            <!-- ATENÇÃO ao so necessario do VALUE para mostrar os valores -->
              <p>Status:  
                <b class="destaque"> <?=$pedido->getStatus()->value ?></b>
              </p>
        <?php 
        $mensagem = 'Seu pedido #'.$pedido->getNumero().' está com o status:'.
        $pedido->getStatus()->value;      
        ?>
            <p><small><?= $notificadorPorEmail->enviar($mensagem) ?></small></p>
         </article>
        <?php endforeach; ?>
        </div>

        <hr>    
        
    <div class="assuntos-estudados">
        <h2>Assuntos estudados</h2>
        
    </div>
        <ul>
            <li>Reorganização dos arquivos em pastas dentro de <b>src</b></li>
            <li>Declaração do namespace e do subnamespace em cada arquivo</li>
            <li>Utilização do nome completo de um recurso: <b>App\Pedidos\Pedido</b></li>
            <li>Importação do namespace com <b>use</b> para utilizar nomes simples</li>
            <li>Criação de apelidos com <b>as</b> para solucionar conflitos de nomes </li>
            <li>Lembrete:
                 <b>use</b> Importa namespace;  
                 <b>require_once</b> carrega arquivos   
            </li>
        </ul>
    </div>
</body>

</html>