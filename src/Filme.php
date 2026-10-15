<?php
// sr/Filme.php

class Filme
{
    //Propriedade: caracteristicas 
    private string $titulo;
    private string $genero;
    private int $ano;
    
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
       $this->ano = $ano;
    }
}