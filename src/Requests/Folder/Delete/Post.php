<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\Delete;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Folder\Delete\Post\FolderDataRequest $data;
}
