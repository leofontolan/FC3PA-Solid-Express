<?php

abstract class Video
{
    abstract public function findInterest();
}


class Movie extends Video
{

    public function findInterest()
    {
        //Calcula
    }
}


class TVShow extends Video
{
    public function findInterest()
    {
        //Calcula
    }
}