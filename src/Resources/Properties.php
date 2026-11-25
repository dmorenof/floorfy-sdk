<?php

declare(strict_types=1);

namespace FloorfySDK\Resources;

final class Properties extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/properties',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Properties\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Properties\\Post',
            'nullable' => false,
            'required' => false,
            'rules' => [],
        ],
    ];

    /**
     * Get properties
     */
    public function post(?\FloorfySDK\Requests\Properties\Post $payload = null): \FloorfySDK\Responses\Properties\Post
    {
        /** @var \FloorfySDK\Responses\Properties\Post $result */
        $result = func_num_args() > 0 ? $this->executeBody(self::operation(self::POST), $payload) : $this->executeArguments(self::operation(self::POST));
        return $result;
    }

    private const array GET_BY_ID = [
        'method' => 'GET',
        'path' => '/properties/{id}',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Properties\\ById\\Get',
    ];

    /**
     * Read property
     */
    public function getById(int $id): \FloorfySDK\Responses\Properties\ById\Get
    {
        /** @var \FloorfySDK\Responses\Properties\ById\Get $result */
        $result = $this->executeArguments(self::operation(self::GET_BY_ID), path: ['id' => $id]);
        return $result;
    }
}
