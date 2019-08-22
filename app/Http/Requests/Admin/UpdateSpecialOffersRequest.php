<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSpecialOffersRequest extends FormRequest
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
            
            'photo' => 'nullable|mimes:png,jpg,jpeg,gif',
            'caption1' => 'required',
            'caption2' => 'nullable|mimes:png,jpg,jpeg,gif',
        ];
    }
}
