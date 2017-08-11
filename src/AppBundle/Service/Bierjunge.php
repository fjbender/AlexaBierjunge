<?php

namespace AppBundle\Service;

class Bierjunge
{
    /**
     * @return mixed
     */
    public function haengt() {
        $haengt = [
            'Hängt!',
            'Hängt doppelt!',
            'Schärf auf, was dein peinlicher Bund dir wert ist!',
            'Gießkanne!',
            'Schärf auf!',
            'Schärf auf, was du tragen kannst!',
            'Komm ran!',
            'Achja?!',
            'Teutonia verdoppelt eh!'
        ];

        $index = array_rand($haengt);

        return $haengt[$index];
    }
}