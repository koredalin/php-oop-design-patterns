<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Transport;

// Parent
use OOPPatterns\AbstractFactory\Transport\TransportManager;
// Concrete interface
use OOPPatterns\AbstractFactory\Carrier\Interfaces\CarrierInterface;
// Concretes
use OOPPatterns\AbstractFactory\Carrier\CarHumanCarrier;
use OOPPatterns\AbstractFactory\Carrier\CarAnimalCarrier;

/* listing 09.31 */
class CarTransportManager extends TransportManager
{
    /**
     * 
     * @param int $flagInt
     * @return CarrierInterface
     * @throws \UnexpectedValueException
     */
    public function make(int $flagInt): CarrierInterface
    {
        switch ($flagInt) {
            case self::HUMAN:
                return new CarHumanCarrier();
            case self::ANIMAL:
                return new CarAnimalCarrier();
        }
        
        throw new \UnexpectedValueException('Unknown CarrierInterface type: '.$flagInt);
    }
}
