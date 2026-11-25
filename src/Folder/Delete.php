<?php

declare(strict_types=1);

namespace FloorfySDK\Folder;

final class Delete extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /folder/delete [operationId: deleteFolder] */
    /**
     * Delete folder
     */
    public static function post(\FloorfySDK\Requests\Folder\Delete\Post $payload): \FloorfySDK\Responses\Folder\Delete\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Folder\Delete::class)->post($payload);
    }

}
