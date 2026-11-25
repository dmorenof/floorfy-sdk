<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Subscription;

final class Consumption extends \FloorfySDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/subscription/consumption',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Subscription\\Consumption\\Get',
    ];

    /**
     * Subscription: get consumption
     */
    public function get(): \FloorfySDK\Responses\Subscription\Consumption\Get
    {
        /** @var \FloorfySDK\Responses\Subscription\Consumption\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
