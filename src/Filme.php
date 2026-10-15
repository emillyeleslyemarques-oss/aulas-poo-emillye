<?php
// sr/Filme.php

class Filme
{
    //Propriedade: caracteristicas 
    public string $titulo;
    public string $genero;
    public int $ano;
    public string $direcao;

    // Métodos: comportamentos(funções)
    public function ehClassico(): bool
    {
       // É classico SE ano for menor que 2000
       return $this->ano < 2000;
    }
}