<?php

declare(strict_types=1);

namespace FloorfySDK\Services;

final class Request extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /services/request [operationId: requestServices] */
    /**
     * Process tour (order services)
     */
    public static function post(\FloorfySDK\Requests\Services\Request\Post $payload): \FloorfySDK\Responses\Services\Request\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Services\Request::class)->post($payload);
    }

}
