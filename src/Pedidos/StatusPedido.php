<?php

namespace App\Pedidos;
enum StatusPedido: string 
{
    case Pendente = "Pendente";
    case AguardandoPagamento = "Aguardando pagamento";
    case Pago = "Pago";
    case EmPreparacao = "Em Preparação";
    case SaiuParaEntrega = "Saiu para entrega";
}