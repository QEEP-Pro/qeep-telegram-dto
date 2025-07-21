<?php

namespace QEEP\Telegram\DTO\Response;

class ResponseToSendMessage
{
    public const string RESPONSE_STATUS_SUCCESS = 'success';
    public const string RESPONSE_STATUS_FAILED = 'failed';

    public function __construct(
        public string $status,
        public int $chatId,
        public string $botToken,
        public ?int $messageId = null,
        public ?string $error = null,
    ) {}
}
