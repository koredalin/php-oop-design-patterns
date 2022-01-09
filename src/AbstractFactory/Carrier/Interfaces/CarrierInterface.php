<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory\Carrier\Interfaces;

/* listing 09.29 */
interface CarrierInterface
{
    public function need(): array;

    public function carry(): string;
}
