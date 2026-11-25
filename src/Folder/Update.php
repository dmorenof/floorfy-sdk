<?php

declare(strict_types=1);

namespace FloorfySDK\Folder;

final class Update extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /folder/update [operationId: updateFolder] */
    /**
     * Update folder
     */
    public static function post(\FloorfySDK\Requests\Folder\Update\Post $payload): \FloorfySDK\Responses\Folder\Update\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Folder\Update::class)->post($payload);
    }

}
