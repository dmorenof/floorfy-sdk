<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Oh;

final class Inprogress extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/oh/inprogress',
        'security' => [
            [
                'PartnerToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Oh\\Inprogress\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Oh\\Inprogress\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Check openhouse status
     */
    public function post(\FloorfySDK\Requests\Oh\Inprogress\Post $payload): \FloorfySDK\Responses\Oh\Inprogress\Post
    {
        /** @var \FloorfySDK\Responses\Oh\Inprogress\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
