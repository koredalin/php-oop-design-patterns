<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

class TruckHumanCarrier extends HumanCarrier
{
    /**
     * 
     * @return array
     */
    public function need(): array
    {
        return array_merge(parent::need(), ['seats']);
    }
    
    public function carry(): string
    {
        return "TruckHumanCarrier carries humans.".PHP_EOL;
    }
}
