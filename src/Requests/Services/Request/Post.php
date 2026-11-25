<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Services\Request;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Services\Request\Post\ServicesDataRequest $data;

}
