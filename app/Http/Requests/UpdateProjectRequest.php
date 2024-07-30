<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|max:100',
            'activity' => 'required|min:5|max:500',
            'description' => 'required|min:5|max:500',
            'image' => 'url',
            // Non inserire spazi a caso perchè me lo formatta come un carattere che però in questo caso, non esiste
            'type_id'=> 'required|integer|exists:types,id',
        ];
    }
}
