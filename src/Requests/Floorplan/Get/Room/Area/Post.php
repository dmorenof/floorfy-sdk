<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Floorplan\Get\Room\Area;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'data',
    ];

    public \FloorfySDK\Requests\Floorplan\Get\Room\Area\Post\AreaDataRequest $data;
}
