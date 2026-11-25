<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Folder\Create;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Folder\Create\Post\CreateDataRequest $data;
}
