<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Watermark;

final class ListResource extends \FloorfySDK\Client
{
    private const array GET = [
        'method' => 'GET',
        'path' => '/watermark/list',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Watermark\\ListResource\\Get',
    ];

    /**
     * Watermarks: list
     */
    public function get(): \FloorfySDK\Responses\Watermark\ListResource\Get
    {
        /** @var \FloorfySDK\Responses\Watermark\ListResource\Get $result */
        $result = $this->executeOperation(self::operation(self::GET));
        return $result;
    }

}
