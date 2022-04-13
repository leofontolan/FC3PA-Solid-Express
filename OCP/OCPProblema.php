<?php

class Video{

    private $type;

    private function findInterest(){
        
        if($this->type == "Movie"){
            // Busca interesse baseado em filme
            return "Filmes";

        }elseif($this->type == "TV Show"){
            // Busca interesse baseado em séries
            return "Séries";
        }
    }
}