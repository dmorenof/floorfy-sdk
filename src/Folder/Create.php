<?php

declare(strict_types=1);

namespace FloorfySDK\Folder;

final class Create extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /folder/create [operationId: createFolder] */
    /**
     * Create folder
     */
    public static function post(\FloorfySDK\Requests\Folder\Create\Post $payload): \FloorfySDK\Responses\Folder\Create\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Folder\Create::class)->post($payload);
    }

}
