<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Property\Exists;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Property\Exists\Post\ExistsDataRequest $data;

}
