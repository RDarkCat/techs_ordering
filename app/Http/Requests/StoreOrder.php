<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrder extends FormRequest
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
            'count' => 'required|digits_between:1,11',
            'delivery_address' => 'required|string|max:65535',
            'contact_phone' => 'required|string|max:50',
            'comment' => 'string|nullable|max:65535',
            'item_id' => 'required|integer|min:1|exists:items,id',
            'user_id' => 'integer|nullable|min:1|exists:users,id'
        ];
    }
}