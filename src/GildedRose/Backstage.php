<?php

namespace GildedRose;

class Backstage extends Item
{
    public function updateQuality()
    {
        $this->quality += 1;

        if ($this->sellIn <= 10) {
            $this->quality += 1;
        }

        if ($this->sellIn <= 5) {
            $this->quality += 1;
        }

        if ($this->quality > 50) {
            $this->quality = 50;
        }

        if ($this->sellIn <= 0) {
            $this->quality = 0;
        }

        $this->sellIn -= 1;
    }
}
