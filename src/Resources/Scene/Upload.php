<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Scene;

final class Upload extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/scene/upload',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Scene\\Upload\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Scene\\Upload\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Upload panorama
     */
    public function post(\FloorfySDK\Requests\Scene\Upload\Post $payload): \FloorfySDK\Responses\Scene\Upload\Post
    {
        /** @var \FloorfySDK\Responses\Scene\Upload\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
