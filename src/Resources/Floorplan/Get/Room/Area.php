<?php

declare(strict_types=1);

namespace FloorfySDK\Resources\Floorplan\Get\Room;

final class Area extends \FloorfySDK\Client
{
    private const array POST = [
        'method' => 'POST',
        'path' => '/floorplan/get/room/area',
        'security' => [
            [
                'AgencyToken' => [],
            ],
        ],
        'responseType' => '\\FloorfySDK\\Responses\\Floorplan\\Get\\Room\\Area\\Post',
        'requestBody' => [
            'type' => '\\FloorfySDK\\Requests\\Floorplan\\Get\\Room\\Area\\Post',
            'nullable' => false,
            'required' => true,
            'rules' => [],
        ],
    ];

    /**
     * Get room areas
     */
    public function post(\FloorfySDK\Requests\Floorplan\Get\Room\Area\Post $payload): \FloorfySDK\Responses\Floorplan\Get\Room\Area\Post
    {
        /** @var \FloorfySDK\Responses\Floorplan\Get\Room\Area\Post $result */
        $result = $this->executeBody(self::operation(self::POST), $payload);
        return $result;
    }
}
