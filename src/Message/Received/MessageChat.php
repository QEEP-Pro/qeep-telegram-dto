<?php

namespace QEEP\Telegram\DTO\Message\Received;

use JMS\Serializer\Annotation as JMS;

#[JMS\ExclusionPolicy(JMS\ExclusionPolicy::ALL)]
class MessageChat
{
    public const string CHAT_TYPE_PRIVATE = 'private';
    public const string CHAT_TYPE_GROUP = 'group';
    public const string CHAT_TYPE_SUPERGROUP = 'supergroup';
    public const string CHAT_TYPE_CHANNEL = 'channel';

    #[JMS\Expose]
    #[JMS\Type('int')]
    private int $id;

    #[JMS\Expose]
    #[JMS\Type('string')]
    private string $type;

    #[JMS\Expose]
    #[JMS\Type('string')]
    private ?string $title = null;

    #[JMS\Expose]
    #[JMS\Type('string')]
    private ?string $username = null;

    #[JMS\Expose]
    #[JMS\SerializedName('first_name')]
    #[JMS\Type('string')]
    private ?string $firstName = null;

    #[JMS\Expose]
    #[JMS\SerializedName('last_name')]
    #[JMS\Type('string')]
    private ?string $lastName = null;

    public function getId(): int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }
}
