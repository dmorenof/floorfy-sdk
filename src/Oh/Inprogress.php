<?php

declare(strict_types=1);

namespace FloorfySDK\Oh;

final class Inprogress extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /oh/inprogress [operationId: openhouseInProgress] */
    /**
     * Check openhouse status
     */
    public static function post(\FloorfySDK\Requests\Oh\Inprogress\Post $payload): \FloorfySDK\Responses\Oh\Inprogress\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Oh\Inprogress::class)->post($payload);
    }

}
