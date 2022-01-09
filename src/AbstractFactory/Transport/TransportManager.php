<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Transport;

use OOPPatterns\AbstractFactory\Carrier\Interfaces\CarrierInterface;

/* listing 09.30 */
abstract class TransportManager
{
    public const HUMAN = 1;
    public const ANIMAL = 2;
    public const CARGO = 3;
    abstract public function make(int $flag_int): CarrierInterface;
}
