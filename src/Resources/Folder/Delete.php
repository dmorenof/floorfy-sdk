<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Folder;

final class Delete extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/folder/delete',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Folder\\Delete\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Folder\\Delete\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Delete folder
     */
    public function post(\FloorfySDK\Requests\Folder\Delete\Post $payload): \FloorfySDK\Responses\Folder\Delete\Post
    {
        /** @var \FloorfySDK\Responses\Folder\Delete\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
