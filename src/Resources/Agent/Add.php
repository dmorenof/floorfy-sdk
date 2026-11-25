<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Agent;

final class Add extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/agent/add',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Agent\\Add\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Agent\\Add\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Create user
     */
    public function post(\FloorfySDK\Requests\Agent\Add\Post $payload): \FloorfySDK\Responses\Agent\Add\Post
    {
        /** @var \FloorfySDK\Responses\Agent\Add\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }

}
