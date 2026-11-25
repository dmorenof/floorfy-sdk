<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Folder;

final class ListResource extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/folder/list',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Folder\\ListResource\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Folder\\ListResource\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * List folders
     */
    public function post(?\FloorfySDK\Requests\Folder\ListResource\Post $payload = null): \FloorfySDK\Responses\Folder\ListResource\Post
    {
        /** @var \FloorfySDK\Responses\Folder\ListResource\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
