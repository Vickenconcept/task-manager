<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateTaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => Rule::requiredIf($this->routeIs('tasks.store')),
            'priority' => Rule::requiredIf($this->routeIs('tasks.update'))
        ];
    }

    protected function passedValidation()
    {
        $this->merge(['user_id' => auth()->id()]);
    }
}
