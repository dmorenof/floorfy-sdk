<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Property\Add;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Property\Add\Post\AddDataRequest $data;

}
