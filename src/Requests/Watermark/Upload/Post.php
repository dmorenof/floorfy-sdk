<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Watermark\Upload;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'data',
];

    public \FloorfySDK\Requests\Watermark\Upload\Post\UploadDataRequest $data;

}
