<?php

declare(strict_types=1);

namespace FloorfySDK\Oh;

final class Contacts extends \FloorfySDK\FloorfyAPISDK
{
    /** POST /oh/contacts [operationId: openhouseContacts] */
    /**
     * Check openhouse contacts
     */
    public static function post(\FloorfySDK\Requests\Oh\Contacts\Post $payload): \FloorfySDK\Responses\Oh\Contacts\Post
    {
        return self::client()->resource(\FloorfySDK\Resources\Oh\Contacts::class)->post($payload);
    }
}
