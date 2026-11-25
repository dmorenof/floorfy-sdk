<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Analytics;

final class Locations extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/analytics/locations',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Analytics\\Locations\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Analytics\\Locations\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Analytics: get locations
     */
    public function post(\FloorfySDK\Requests\Analytics\Locations\Post $payload): \FloorfySDK\Responses\Analytics\Locations\Post
    {
        /** @var \FloorfySDK\Responses\Analytics\Locations\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
