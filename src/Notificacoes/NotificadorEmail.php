<?php

namespace App\Notificacoes;

class NotificadorEmail implements Notificador
{
    //Contador de envios
    private static int $quantidadeEnviada = 0;
     
    /* Implementação do método enviar de acordo com os padrões
    definidos na Interface: mesmo nome, mesma quantidade de parâmetros,
    mesmo tipo de dados dos parâmetros, mesmo tipo de retorno esperado. */
    public function enviar(string $mensagem): string
    {
        /* Sempre que ocorrer o acionamento do metodo enviar,
        atualizaremos a propriedade estática da classe  */
        self::$quantidadeEnviada++;
        
        return "E-mail: $mensagem";
    } 

    /* Usaremos um getter estatico para ter
    acesso ao total de envios feitos */
    public static function getQuantidadeEnviada(): int
    {
        return self::$quantidadeEnviada;
    }


}