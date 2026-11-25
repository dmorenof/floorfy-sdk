<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Services;

final class Request extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/services/request',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Services\\Request\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Services\\Request\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Process tour (order services)
     */
    public function post(\FloorfySDK\Requests\Services\Request\Post $payload): \FloorfySDK\Responses\Services\Request\Post
    {
        /** @var \FloorfySDK\Responses\Services\Request\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
