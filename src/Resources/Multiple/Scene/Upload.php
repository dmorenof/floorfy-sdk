<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Multiple\Scene;

final class Upload extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/multiple/scene/upload',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Multiple\\Scene\\Upload\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Multiple\\Scene\\Upload\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Upload list of panoramas
     */
    public function post(\FloorfySDK\Requests\Multiple\Scene\Upload\Post $payload): \FloorfySDK\Responses\Multiple\Scene\Upload\Post
    {
        /** @var \FloorfySDK\Responses\Multiple\Scene\Upload\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
