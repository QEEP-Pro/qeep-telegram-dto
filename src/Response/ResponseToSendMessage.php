<?php

namespace QEEP\Telegram\DTO\Response;

class ResponseToSendMessage
{
    public function __construct(
        public string $status,
        public int $chat_id,
        public string $bot_token,
        public ?int $message_id = null,
        public ?string $error = null,
    ) {}
}
