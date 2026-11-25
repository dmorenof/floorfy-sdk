<?php

declare(strict_types=1);

namespace FloorfySDK\Scene;

final class Upload extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /scene/upload [operationId: uploadPanorama] */
    /**
     * Upload panorama
     */
    public static function post(\FloorfySDK\Requests\Scene\Upload\Post $payload): \FloorfySDK\Responses\Scene\Upload\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Scene\Upload::class)->post($payload);
    }

}
