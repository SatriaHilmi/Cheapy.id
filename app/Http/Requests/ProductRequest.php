<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'photo' => 'image',
            'name' => 'required|string',
            'purchase_price' => '',
            'selling_price' => 'required',
            'stock' => 'required|integer',
            // 'category_id' => 'required|integer'
        ];
    }
}
