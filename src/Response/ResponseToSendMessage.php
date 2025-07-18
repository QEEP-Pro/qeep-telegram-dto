<?php

namespace QEEP\Telegram\DTO\Response;

class ResponseToSendMessage
{
    public function __construct(
        public string $status,
        public int $chatId,
        public string $botToken,
        public ?int $messageId = null,
        public ?string $error = null,
    ) {}
}
