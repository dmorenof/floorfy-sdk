<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Agent\Add;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Agent\Add\Post\AddDataRequest $data;

}
