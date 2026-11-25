<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Analytics;

final class Visits extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/analytics/visits',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Analytics\\Visits\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Analytics\\Visits\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Analytics: get visits list
     */
    public function post(\FloorfySDK\Requests\Analytics\Visits\Post $payload): \FloorfySDK\Responses\Analytics\Visits\Post
    {
        /** @var \FloorfySDK\Responses\Analytics\Visits\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
