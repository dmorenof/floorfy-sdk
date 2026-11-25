<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Analytics\Visits;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Analytics\Visits\Post\VisitsDataRequest $data;
}
