<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Agent;

final class Get extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/agent/get',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Agent\\Get\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Agent\\Get\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get user by email
     */
    public function post(\FloorfySDK\Requests\Agent\Get\Post $payload): \FloorfySDK\Responses\Agent\Get\Post
    {
        /** @var \FloorfySDK\Responses\Agent\Get\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
