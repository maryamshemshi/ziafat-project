<?php

namespace App\Http\Requests;

use App\Enums\TicketStatus;
use App\Models\Ticket;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'subject' => ['required', 'string', 'max:255'],
            'text'    => ['required', 'string', 'min:10'],
        ];
    }

    public function validated($key = null, $default = null)
    {
        $ticketNumber = 'TKT-' . now()->format('ymd') . '-' . str_pad(Ticket::count() + 1, 5, '0', STR_PAD_LEFT);

        return [
            'ticket_number' => $ticketNumber,
            'subject' => $this->input('subject'),
            'text' => $this->input('text'),
            'status' => TicketStatus::Pending,
            'ip_address' => request()->ip(),
        ];
    }
}
