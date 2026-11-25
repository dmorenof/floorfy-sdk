<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Scene\Upload;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Scene\Upload\Post\UploadDataRequest $data;

}
