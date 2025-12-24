<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
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

    public function messages(): array
    {
        return [
            'subject.required' => 'عنوان درخواست الزامی است.',
            'text.required'    => 'شرح مشکل را لطفاً بنویسید.',
            'text.min'         => 'شرح درخواست باید حداقل ۱۰ کاراکتر باشد.',
        ];
    }
}
