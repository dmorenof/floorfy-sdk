<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Analytics;

final class Summary extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/analytics/summary',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Analytics\\Summary\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Analytics\\Summary\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Analytics: get summary
     */
    public function post(\FloorfySDK\Requests\Analytics\Summary\Post $payload): \FloorfySDK\Responses\Analytics\Summary\Post
    {
        /** @var \FloorfySDK\Responses\Analytics\Summary\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
