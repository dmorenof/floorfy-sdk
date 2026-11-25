<?php

declare(strict_types=1);

namespace FloorfySDK\Requests\Property\Add\Post;

final class AddDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id_origin',
    'location',
];

    protected const array VALIDATION = [
    'description' => [
        'maxLength' => 4096,
    ],
];

    public int $agent;
    public float $amount;
    public int $bathrooms;
    /**
     * 1 Sale, 2 Renting, 3 Sold, 4 Rented
     */
    public int $contract_type;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public \FloorfySDK\Collections\IntegerCollection $facilities;
    public int $id_folder;
    public string $id_origin;
    /**
     * Integer assigns it; null reverts to the agency default; omit for no change
     */
    public ?int $id_watermark;
    public float $living_area;
    public \FloorfySDK\Requests\Property\Add\Post\Data\DataLocationRequest $location;
    /**
     * Email of the photographer or Floorfy username
     */
    public string $photographer;
    /**
     * 1 Active, 0 Archived
     */
    public int $property_status;
    /**
     * 1 House, 2 Flat, 3 Apartment, 4 Duplex, 5 Local, 6 Nave, 7 Office, 8 Garage, 9 Studio/Loft, 10 Penthouse, 11 Urban, 12 Urbanizable, 13 Not urbanizable, 14 Parking, 15 Storage room, 16 Living place
     */
    public int $property_type;
    public int $rooms;
    public \FloorfySDK\Enums\Property\Add\Post\Data\TimeTypeEnum $time_type;
    public string $title;
    public float $total_area;
    public int $year_building;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agent' => is_int($value) ? $this->agent = $value : parent::assignMember($name, $value),
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'contract_type' => is_int($value) ? $this->contract_type = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'facilities' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_int($item)) ? $this->facilities = new \FloorfySDK\Collections\IntegerCollection($value) : parent::assignMember($name, $value),
            'id_folder' => is_int($value) ? $this->id_folder = $value : parent::assignMember($name, $value),
            'id_origin' => is_string($value) ? $this->id_origin = $value : parent::assignMember($name, $value),
            'id_watermark' => $value === null || is_int($value) ? $this->id_watermark = $value : parent::assignMember($name, $value),
            'living_area' => is_float($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'photographer' => is_string($value) ? $this->photographer = $value : parent::assignMember($name, $value),
            'property_status' => is_int($value) ? $this->property_status = $value : parent::assignMember($name, $value),
            'property_type' => is_int($value) ? $this->property_type = $value : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'time_type' => is_string($value) ? $this->time_type = \FloorfySDK\Enums\Property\Add\Post\Data\TimeTypeEnum::from($value) : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_area' => is_float($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'year_building' => is_int($value) ? $this->year_building = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
