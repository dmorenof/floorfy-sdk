<?php

declare(strict_types=1);

namespace FloorfySDK\Property;

final class Exists extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /property/exists [operationId: propertyExists] */
    /**
     * Get tour status
     */
    public static function post(\FloorfySDK\Requests\Property\Exists\Post $payload): \FloorfySDK\Responses\Property\Exists\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Property\Exists::class)->post($payload);
    }

}
