<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Agent\Get;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Agent\Get\Post\AgentDataRequest $data;
}
