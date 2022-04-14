<?php

interface Movie{

    public function play();
}

interface AudioControl{

    public function incrementVolume();
}

class TheLionKing implements Movie, AudioControl{

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
}
