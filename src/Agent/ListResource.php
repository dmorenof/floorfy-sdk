<?php

declare(strict_types=1);

namespace FloorfySDK\Agent;

final class ListResource extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /agent/list [operationId: listAgents] */
    /**
     * List agency users
     */
    public static function post(?\FloorfySDK\Requests\Agent\ListResource\Post $payload = null): \FloorfySDK\Responses\Agent\ListResource\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\FloorfySDK\Resources\Agent\ListResource::class)->post();
        }
        return self::client()->resource(\FloorfySDK\Resources\Agent\ListResource::class)->post($payload);
    }

}
