<?php

declare(strict_types=1);

namespace FloorfySDK\Folder;

final class ListResource extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /folder/list [operationId: listFolders] */
    /**
     * List folders
     */
    public static function post(?\FloorfySDK\Requests\Folder\ListResource\Post $payload = null): \FloorfySDK\Responses\Folder\ListResource\Post
    {
        if (func_num_args() <= 0) {
            return self::client()->resource(\FloorfySDK\Resources\Folder\ListResource::class)->post();
        }
        return self::client()->resource(\FloorfySDK\Resources\Folder\ListResource::class)->post($payload);
    }

}
