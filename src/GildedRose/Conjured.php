<?php

namespace GildedRose;

class Conjured extends Item
{
    public function updateQuality()
    {
        $this->quality -= 2;
        $this->sellIn -= 1;

        if ($this->sellIn <= 0) {
            $this->quality -= 2;
        }

        if ($this->quality <= 0) {
            $this->quality = 0;
        }
    }
}
