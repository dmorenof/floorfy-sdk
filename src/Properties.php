<?php

declare(strict_types=1);

namespace FloorfySDK;

final class Properties extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /properties [operationId: listProperties] */
    /**
     * Get properties
     */
    public static function post(?\FloorfySDK\Requests\Properties\Post $payload = null): \FloorfySDK\Responses\Properties\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\FloorfySDK\Resources\Properties::class)->post();
        }
        return self::client()->resource(\FloorfySDK\Resources\Properties::class)->post($payload);
    }

    /** GET /properties/{id} [operationId: getProperty] */
    /**
     * Read property
     */
    public static function getById(int $id): \FloorfySDK\Responses\Properties\ById\Get
    {
        return self::client()->resource(\FloorfySDK\Resources\Properties::class)->getById($id);
    }

}
