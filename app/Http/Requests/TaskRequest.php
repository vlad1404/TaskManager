<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaskRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'text' => 'required|min:5',
            'date' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => 'Date is required',
            'name.required' => 'Name is required',
            'name.min' => 'Name length min 5',
            'text.required' => 'Text is required',
            'text.min' => 'Text length min 5',
        ];
    }
}
