<?php

declare(strict_types=1);

namespace OOPPatterns\AbstractFactory;

use OOPPatterns\AbstractFactory\Transport\TransportManager;

class Runner
{
    public static function run()
    {
        echo '<pre>';
        $truckManager = new Transport\TruckTransportManager();
        $animalTruckTransport = $truckManager->make(TransportManager::ANIMAL);
        print '<p>'.$animalTruckTransport->carry().'</p>';
        echo 'Needs: '.implode(', ', $animalTruckTransport->need()).'.';
        echo '<br/><br/><br/>';
        $truckManager = new Transport\TruckTransportManager();
        $animalTruckTransport = $truckManager->make(TransportManager::HUMAN);
        print '<p>'.$animalTruckTransport->carry().'</p>';
        echo 'Needs: '.implode(', ', $animalTruckTransport->need()).'.';
        echo '</pre>';
    }
}
