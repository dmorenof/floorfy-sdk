<?php

declare(strict_types=1);

namespace FloorfySDK\Property;

final class Update extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /property/update [operationId: updateProperty] */
    /**
     * Update property
     */
    public static function post(\FloorfySDK\Requests\Property\Update\Post $payload): \FloorfySDK\Responses\Property\Update\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Property\Update::class)->post($payload);
    }
}
