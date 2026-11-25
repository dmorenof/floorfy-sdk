<?php

declare(strict_types=1);

namespace FloorfySDK\Agent;

final class Get extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /agent/get [operationId: getAgent] */
    /**
     * Get user by email
     */
    public static function post(\FloorfySDK\Requests\Agent\Get\Post $payload): \FloorfySDK\Responses\Agent\Get\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Agent\Get::class)->post($payload);
    }
}
