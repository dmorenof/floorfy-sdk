<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Agent\Update;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Agent\Update\Post\UpdateDataRequest $data;

}
