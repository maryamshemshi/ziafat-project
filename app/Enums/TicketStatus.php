<?php

namespace App\Enums;

enum TicketStatus: string
{
    case Pending = 'pending';
    case Answered = 'answered';

    public function label(): string
    {
        return match ($this) {
            self::Pending => 'در حال بررسی',
            self::Answered => 'پاسخ داده شده',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::Pending => 'bg-amber-100 text-amber-800',
            self::Answered => 'bg-green-100 text-green-800',
        };
    }

    public function isOpen(): bool
    {
        return $this === self::Pending;
    }

    public function isAnswered(): bool
    {
        return $this === self::Answered;
    }
}
