<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromoRequest extends FormRequest
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
            'price_per_hour' => 'integer|nullable|size:11',
            'price_per_day' => 'integer|nullable|size:11',
            'description' => 'required|string|nullable|max:65535'
        ];
    }
}
