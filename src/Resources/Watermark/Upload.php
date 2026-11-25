<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Watermark;

final class Upload extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/watermark/upload',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Watermark\\Upload\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Watermark\\Upload\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Watermarks: upload
     */
    public function post(\FloorfySDK\Requests\Watermark\Upload\Post $payload): \FloorfySDK\Responses\Watermark\Upload\Post
    {
        /** @var \FloorfySDK\Responses\Watermark\Upload\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
