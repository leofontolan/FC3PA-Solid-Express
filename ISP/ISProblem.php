<?php

interface Movie{

    public function play();

    public function incrementVolume();
}

class TheLionKing implements Movie{

    public function play(){
        // play video
    }

    public function incrementVolume(){
        // increment volume
    }

}

class ModernTimes implements Movie{

    public function play(){
        // play video
    }

    public function incrementVolume(){
        // Esse método não tem nenhuma função, pois o filme é mudo.
        // Mas somos obrigados a implementar o método, pois a interface Movie
    }

}