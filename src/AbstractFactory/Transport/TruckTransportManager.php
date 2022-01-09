<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Transport;

// Parent
use OOPPatterns\AbstractFactory\Transport\TransportManager;
// Concrete interface
use OOPPatterns\AbstractFactory\Carrier\Interfaces\CarrierInterface;
// Concretes
use OOPPatterns\AbstractFactory\Carrier\TruckHumanCarrier;
use OOPPatterns\AbstractFactory\Carrier\TruckAnimalCarrier;

/* listing 09.31 */
class TruckTransportManager extends TransportManager
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
                return new TruckHumanCarrier();
            case self::ANIMAL:
                return new TruckAnimalCarrier();
        }
        
        throw new \UnexpectedValueException('Unknown CarrierInterface type: '.$flagInt);
    }
}
