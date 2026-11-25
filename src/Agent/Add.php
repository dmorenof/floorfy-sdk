<?php

declare(strict_types=1);

namespace FloorfySDK\Agent;

final class Add extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /agent/add [operationId: createAgent] */
    /**
     * Create user
     */
    public static function post(\FloorfySDK\Requests\Agent\Add\Post $payload): \FloorfySDK\Responses\Agent\Add\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Agent\Add::class)->post($payload);
    }

}
