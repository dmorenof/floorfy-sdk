<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Folder;

final class Update extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/folder/update',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Folder\\Update\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Folder\\Update\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update folder
     */
    public function post(\FloorfySDK\Requests\Folder\Update\Post $payload): \FloorfySDK\Responses\Folder\Update\Post
    {
        /** @var \FloorfySDK\Responses\Folder\Update\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
