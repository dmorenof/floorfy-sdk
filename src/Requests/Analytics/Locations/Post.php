<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Analytics\Locations;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Analytics\Locations\Post\LocationsDataRequest $data;

}
