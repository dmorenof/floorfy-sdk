<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Property;

final class Exists extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/property/exists',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Property\\Exists\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Property\\Exists\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get tour status
     */
    public function post(\FloorfySDK\Requests\Property\Exists\Post $payload): \FloorfySDK\Responses\Property\Exists\Post
    {
        /** @var \FloorfySDK\Responses\Property\Exists\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
