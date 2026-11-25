<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Oh\Contacts;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public string $agency;
    public int $idfloorfy;
    public string $idproperty;
    public int $status;
    public string $title;
    public string $total_time_publish;
    public \FloorfySDK\Collections\Oh\Contacts\Post\ContactsUsersCollection $users;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'agency' => is_string($value) ? $this->agency = $value : parent::assignMember($name, $value),
            'idfloorfy' => is_int($value) ? $this->idfloorfy = $value : parent::assignMember($name, $value),
            'idproperty' => is_string($value) ? $this->idproperty = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'total_time_publish' => is_string($value) ? $this->total_time_publish = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
