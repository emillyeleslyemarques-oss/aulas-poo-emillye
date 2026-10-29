<?php
/* Cada case representa um status permitido e possui um
valor/texto associado, que voce pode escrever como quiser
(acentos, espaços, cedilha) */
enum StatusPedido: string 
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "Aguardando pagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em Preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}