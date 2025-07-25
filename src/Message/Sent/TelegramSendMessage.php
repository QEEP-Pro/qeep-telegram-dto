<?php

namespace QEEP\Telegram\DTO\Message\Sent;

use QEEP\Telegram\DTO\Keyboard\Keyboard;

class TelegramSendMessage extends AbstractTelegramSendMessage
{
    public function __construct(
        int $chatId,
        private readonly string $text,
        string $botToken,
        private readonly ?Keyboard $keyboard = null,
        private readonly ?int $replyToMessageId = null,
        private bool $needResponse = false,
    ) {
        parent::__construct($chatId, $botToken);
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getKeyboard(): ?Keyboard
    {
        return $this->keyboard;
    }

    public function getReplyToMessageId(): ?int
    {
        return $this->replyToMessageId;
    }

    public function isNeedResponse(): bool
    {
        return $this->needResponse;
    }
}
