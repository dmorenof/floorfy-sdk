<?php

declare(strict_types=1);

namespace FloorfySDK\Published;

final class Ready extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /published/ready [operationId: listPublishedTours] */
    /**
     * Get tours
     */
    public static function post(?\FloorfySDK\Requests\Published\Ready\Post $payload = null): \FloorfySDK\Responses\Published\Ready\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\FloorfySDK\Resources\Published\Ready::class)->post();
        }
        return self::client()->resource(\FloorfySDK\Resources\Published\Ready::class)->post($payload);
    }
}
