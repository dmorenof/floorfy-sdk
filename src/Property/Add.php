<?php

declare(strict_types=1);

namespace FloorfySDK\Property;

final class Add extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /property/add [operationId: createProperty] */
    /**
     * Create property
     */
    public static function post(\FloorfySDK\Requests\Property\Add\Post $payload): \FloorfySDK\Responses\Property\Add\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Property\Add::class)->post($payload);
    }

}
