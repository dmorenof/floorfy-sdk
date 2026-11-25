<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Published;

final class Ready extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/published/ready',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Published\\Ready\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Published\\Ready\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get tours
     */
    public function post(?\FloorfySDK\Requests\Published\Ready\Post $payload = null): \FloorfySDK\Responses\Published\Ready\Post
    {
        /** @var \FloorfySDK\Responses\Published\Ready\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

}
