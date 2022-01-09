<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

use OOPPatterns\AbstractFactory\Carrier\Interfaces\CarrierInterface;

abstract class HumanCarrier implements CarrierInterface
{
    /**
     * 
     * @return array
     */
    public function need(): array
    {
        return ['seat belts'];
    }
    
    abstract public function carry(): string;
}
