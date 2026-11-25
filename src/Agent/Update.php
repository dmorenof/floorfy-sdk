<?php

declare(strict_types=1);

namespace FloorfySDK\Agent;

final class Update extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /agent/update [operationId: updateAgent] */
    /**
     * Update user
     */
    public static function post(\FloorfySDK\Requests\Agent\Update\Post $payload): \FloorfySDK\Responses\Agent\Update\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Agent\Update::class)->post($payload);
    }
}
