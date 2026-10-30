<?php

//Namespace principal/raiz: App (pode ser qualquer nome)
//Seguido de \ e o noime do subnamespace (nome da pasta)
namespace App\Notificacoes;


interface Notificador
{
    /* O padrão definido aqui é: nome, parâmetros, tipo de dados
    dos parâmetro e tipo de retorno do método */
    public function enviar(string $mensagem): string;
    public static function getQuantidadeEnviada(): int;
}