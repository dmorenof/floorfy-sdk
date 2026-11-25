<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Property;

final class Update extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/property/update',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Property\\Update\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Property\\Update\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update property
     */
    public function post(\FloorfySDK\Requests\Property\Update\Post $payload): \FloorfySDK\Responses\Property\Update\Post
    {
        /** @var \FloorfySDK\Responses\Property\Update\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
