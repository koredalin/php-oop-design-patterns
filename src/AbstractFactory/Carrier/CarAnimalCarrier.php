<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

class CarAnimalCarrier extends AnimalCarrier
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
        return "CarAnimalCarrier carries animals.".PHP_EOL;
    }
}
