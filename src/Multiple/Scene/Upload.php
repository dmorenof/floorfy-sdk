<?php

declare(strict_types=1);

namespace FloorfySDK\Multiple\Scene;

final class Upload extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /multiple/scene/upload [operationId: uploadPanoramas] */
    /**
     * Upload list of panoramas
     */
    public static function post(\FloorfySDK\Requests\Multiple\Scene\Upload\Post $payload): \FloorfySDK\Responses\Multiple\Scene\Upload\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Multiple\Scene\Upload::class)->post($payload);
    }

}
