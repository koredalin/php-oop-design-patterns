<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

class TruckAnimalCarrier extends AnimalCarrier
{
    /**
     * 
     * @return array
     */
    public function need(): array
    {
        return array_merge(parent::need(), ['trailer']);
    }
    
    public function carry(): string
    {
        return "TruckAnimalCarrier carries animals.".PHP_EOL;
    }
}
