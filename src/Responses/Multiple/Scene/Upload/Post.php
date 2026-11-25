<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Multiple\Scene\Upload;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $id_floorfy;
    public string $message;
    public int $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id_floorfy' => is_string($value) ? $this->id_floorfy = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
