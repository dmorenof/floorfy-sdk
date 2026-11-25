<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Agent;

final class ListResource extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/agent/list',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Agent\\ListResource\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Agent\\ListResource\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * List agency users
     */
    public function post(?\FloorfySDK\Requests\Agent\ListResource\Post $payload = null): \FloorfySDK\Responses\Agent\ListResource\Post
    {
        /** @var \FloorfySDK\Responses\Agent\ListResource\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
