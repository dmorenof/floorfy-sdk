<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Oh;

final class Contacts extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/oh/contacts',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Oh\\Contacts\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Oh\\Contacts\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Check openhouse contacts
     */
    public function post(\FloorfySDK\Requests\Oh\Contacts\Post $payload): \FloorfySDK\Responses\Oh\Contacts\Post
    {
        /** @var \FloorfySDK\Responses\Oh\Contacts\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
