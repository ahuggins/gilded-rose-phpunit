<?php

namespace GildedRose;

class AgedBrie extends Item
{
    public function updateQuality()
    {
        $this->quality += 1;
        $this->sellIn -= 1;

        if ($this->sellIn <= 0) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }
    }
}
