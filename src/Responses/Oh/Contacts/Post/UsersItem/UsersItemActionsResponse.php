<?php

declare(strict_types=1);

namespace FloorfySDK\Responses\Oh\Contacts\Post\UsersItem;

final class UsersItemActionsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public float $amount;
    public string $date_contact;
    public string $date_visit;
    public string $email;
    public string $message;
    public string $phone;
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_float($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'date_contact' => is_string($value) ? $this->date_contact = $value : parent::assignMember($name, $value),
            'date_visit' => is_string($value) ? $this->date_visit = $value : parent::assignMember($name, $value),
            'email' => is_string($value) ? $this->email = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            'phone' => is_string($value) ? $this->phone = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
