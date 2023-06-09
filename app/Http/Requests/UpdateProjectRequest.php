<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', Rule::unique('projects', 'name')->ignore($this->project), 'max:150'],
            'description' => ['nullable'],
            'start_date' => ['nullable', 'date'],
            'finish_date' => ['nullable', 'date'],
            'git_hub_link' => ['nullable', 'url'],
            'page_link' => ['nullable', 'url'],
        ];
    }
}