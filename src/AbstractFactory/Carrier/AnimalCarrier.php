<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier;

use OOPPatterns\AbstractFactory\Carrier\Interfaces\CarrierInterface;

abstract class AnimalCarrier implements CarrierInterface
{
    /**
     * 
     * @return array
     */
    public function need(): array
    {
        return ['belts'];
    }

    abstract public function carry(): string;
}
