<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Agent;

final class Update extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/agent/update',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Agent\\Update\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Agent\\Update\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Update user
     */
    public function post(\FloorfySDK\Requests\Agent\Update\Post $payload): \FloorfySDK\Responses\Agent\Update\Post
    {
        /** @var \FloorfySDK\Responses\Agent\Update\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
