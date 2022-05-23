<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSaveRequest extends FormRequest
{
    /**
     * Determine if the current user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
//        return (auth()->guard('api')->check() || auth()->guard('cms-api')->check());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'transaction_id' => 'required|integer|between:-9223372036854775807,9223372036854775807',
            'label' => 'required|string|min:2|max:255',
            'qty' => 'required|integer|between:-2147483647,2147483647',
            'price' => 'required|integer|between:-2147483647,2147483647',
            'size' => 'required|integer|between:-2147483647,2147483647',
            'detail' => 'required|string|min:2|max:65535',
        ];
    }
}
