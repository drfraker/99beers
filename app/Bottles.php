<?php

namespace App;

class Bottles
{
    public function song()
    {
        return $this->verses(99, 0);
    }

    public function verses($starting, $ending)
    {
        $verse = collect(range($starting, $ending))->map(function ($number) {
            return $this->verse($number);
        })->implode("\n");

        return $verse;
    }

    public function verse($number)
    {
        switch ($number) {
            case 0:
                $verse =  "No more bottles of beer on the wall, " .
                    "no more bottles of beer.\n" .
                    "Go to the store and buy some more, " .
                    "99 bottles of beer on the wall.\n";

                break;
            case 1:
                $verse =  "1 bottle of beer on the wall, " .
                    "1 bottle of beer.\n" .
                    "Take it down and pass it around, " .
                    "no more bottles of beer on the wall.\n";
                break;
            case 2:
                $verse = "2 bottles of beer on the wall, " .
                    "2 bottles of beer.\n" .
                    "Take one down and pass it around, " .
                   "1 bottle of beer on the wall.\n";
                break;

            default:
                $less1 = $number - 1;
                $verse =  "{$number} bottles of beer on the wall, " .
                    "{$number} bottles of beer.\n" .
                    "Take one down and pass it around, " .
                    "{$less1} bottles of beer on the wall.\n";
        }

        return $verse;
    }
}