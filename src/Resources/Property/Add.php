<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Property;

final class Add extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/property/add',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Property\\Add\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Property\\Add\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create property
     */
    public function post(\FloorfySDK\Requests\Property\Add\Post $payload): \FloorfySDK\Responses\Property\Add\Post
    {
        /** @var \FloorfySDK\Responses\Property\Add\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
