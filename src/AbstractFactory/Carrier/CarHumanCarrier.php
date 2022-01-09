<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

class CarHumanCarrier extends HumanCarrier
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
        return "CarHumanCarrier carries humans.".PHP_EOL;
    }
}
