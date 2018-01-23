<?php

// src/AppBundle/Utils/Adder.php
namespace AppBundle\Utils;

class Adder
{
    public function addScore($scr) {
        $scores = (explode("-",$scr));
        $scra = $scores[0];
        $scrh = $scores[1];
        $both_scores = $scra + $scrh;
        return $both_scores;
    }
}
