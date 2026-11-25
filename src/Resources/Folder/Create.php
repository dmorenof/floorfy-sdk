<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Folder;

final class Create extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/folder/create',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Folder\\Create\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Folder\\Create\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create folder
     */
    public function post(\FloorfySDK\Requests\Folder\Create\Post $payload): \FloorfySDK\Responses\Folder\Create\Post
    {
        /** @var \FloorfySDK\Responses\Folder\Create\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
