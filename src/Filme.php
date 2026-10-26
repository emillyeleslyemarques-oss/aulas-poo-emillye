<?php
// sr/Filme.php

//Filme é uma subclasse que HERDA da superclasse Conteudo
class Filme extends Conteudo
{
    // Propriedade especifica da classe Filme
    private int $duracao;

    // Construtor especifico da sublasse Filme
    //Responsevel por receber os valores no momento da criação de objeto Filme
    public function __construct(string $titulo, string $genero, int $ano, int $duracao)
    {
      //Chamando o construtor da supperclasse Conteudo
      parent:: __construct($titulo, $genero, $ano);
      
       // Atribuindo o valor à propriedade duracao é de filme
      $this->duracao = $duracao;
    }

   //implementação obrigatoria do metodo getDescricao em Filme
    public function getDescricao(): string 
    {
        return "O filme" .$this->getTitulo(). "possui $this->duracao minutos de duração.";
    }

}