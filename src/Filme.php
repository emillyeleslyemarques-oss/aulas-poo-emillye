<?php
// sr/Filme.php

class Filme
{
    //Propriedade: caracteristicas 
    private string $titulo;
    private string $genero;
    private int $ano;

    /* Método construtor a finalidade deste metodo é receber dados no 
    atraves de momento da criação e atribui-los as propriedades. Este metodo não possui retorno
     */
    public function __construct(string $titulo, string $genero, int $ano)
    {
      // Atribuindo os valores recebidos pelos parametros as propriedades
      $this->titulo = $titulo;
      $this->genero = $genero;
      // $this->ano = $ano;
      
      // Podemos ou devemos usar os setters atraves do contructor
      $this->setAno($ano);
    }
    
    public function ehClassico(): bool
    { 
       return $this->ano < 2000;
    }

    /* Métodos getters: permite ACESSO/LEITURA (ler dados)*/
    public function getTitulo(): string
    {
       return $this->titulo;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getAno(): int
    {
        return $this->ano;
    }

    /* Métodos setters: permite ACESSO/ESCRITA (colocar dados)*/
                                     //parametro
    public function setTitulo(string $titulo): void
    {         //propriedade         
       $this->titulo = $titulo;
    }

     public function setGenero(string $genero): void
    {         //propriedade         
       $this->genero = $genero;
    }

     public function setAno(int $ano): void
    {         //propriedade
       if($ano > 0){      
         $this->ano = $ano;
       } 
    }
}