<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Properties\ById;

final class Get extends \Dmorenof\SdkRuntime\DTO
{
    public float $amount;
    public int $bathrooms;
    public string $bounded_floorplan;
    public \FloorfySDK\Collections\StringCollection $bounded_floorplan_branded_images;
    public \FloorfySDK\Collections\StringCollection $bounded_floorplan_images;
    public int $contract_type;
    public string $description;
    public \FloorfySDK\Responses\Properties\ById\Get\ByIdExtrasResponse $extras;
    public string $id;
    public int $idFloorfy;
    public ?int $id_folder;
    public ?int $id_watermark;
    public \FloorfySDK\Collections\StringCollection $images;
    public \FloorfySDK\Collections\StringCollection $imgs_watermark;
    public bool $is_published;
    public string $last_upload_date;
    public float $living_area;
    public \FloorfySDK\Responses\Properties\ById\Get\ByIdLocationResponse $location;
    public string $message;
    public int $property_status;
    public int $property_type;
    public int $rooms;
    public string $scaled_floorplan;
    public \FloorfySDK\Collections\StringCollection $scaled_floorplan_branded_images;
    public \FloorfySDK\Collections\StringCollection $scaled_floorplan_images;
    public int $status;
    public string $title;
    public float $total_area;
    public string $tour;
    public string $uploaded_floorplan;
    public \FloorfySDK\Collections\StringCollection $uploaded_floorplan_branded_images;
    public \FloorfySDK\Collections\StringCollection $uploaded_floorplan_images;
    public int $version;
    public string $video_url;
    public string $youtube_url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'bathrooms' => is_int($value) ? $this->bathrooms = $value : parent::assignMember($name, $value),
            'bounded_floorplan' => is_string($value) ? $this->bounded_floorplan = $value : parent::assignMember($name, $value),
            'bounded_floorplan_branded_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->bounded_floorplan_branded_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'bounded_floorplan_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->bounded_floorplan_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'contract_type' => is_int($value) ? $this->contract_type = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'idFloorfy' => is_int($value) ? $this->idFloorfy = $value : parent::assignMember($name, $value),
            'id_folder' => $value === null || is_int($value) ? $this->id_folder = $value : parent::assignMember($name, $value),
            'id_watermark' => $value === null || is_int($value) ? $this->id_watermark = $value : parent::assignMember($name, $value),
            'images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'imgs_watermark' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->imgs_watermark = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'is_published' => is_bool($value) ? $this->is_published = $value : parent::assignMember($name, $value),
            'last_upload_date' => is_string($value) ? $this->last_upload_date = $value : parent::assignMember($name, $value),
            'living_area' => is_float($value) ? $this->living_area = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'property_status' => is_int($value) ? $this->property_status = $value : parent::assignMember($name, $value),
            'property_type' => is_int($value) ? $this->property_type = $value : parent::assignMember($name, $value),
            'rooms' => is_int($value) ? $this->rooms = $value : parent::assignMember($name, $value),
            'scaled_floorplan' => is_string($value) ? $this->scaled_floorplan = $value : parent::assignMember($name, $value),
            'scaled_floorplan_branded_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scaled_floorplan_branded_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'scaled_floorplan_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->scaled_floorplan_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_area' => is_float($value) ? $this->total_area = $value : parent::assignMember($name, $value),
            'tour' => is_string($value) ? $this->tour = $value : parent::assignMember($name, $value),
            'uploaded_floorplan' => is_string($value) ? $this->uploaded_floorplan = $value : parent::assignMember($name, $value),
            'uploaded_floorplan_branded_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->uploaded_floorplan_branded_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'uploaded_floorplan_images' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->uploaded_floorplan_images = new \FloorfySDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'version' => is_int($value) ? $this->version = $value : parent::assignMember($name, $value),
            'video_url' => is_string($value) ? $this->video_url = $value : parent::assignMember($name, $value),
            'youtube_url' => is_string($value) ? $this->youtube_url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
