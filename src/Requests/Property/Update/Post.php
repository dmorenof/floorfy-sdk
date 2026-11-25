<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Property\Update;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Property\Update\Post\UpdateDataRequest $data;
}
