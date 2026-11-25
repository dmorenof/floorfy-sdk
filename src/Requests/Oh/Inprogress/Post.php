<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Oh\Inprogress;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Oh\Inprogress\Post\InprogressDataRequest $data;
}
