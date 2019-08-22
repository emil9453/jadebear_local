<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSpecialOffersRequest extends FormRequest
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
            'photo' => 'mimes:png,jpg,jpeg,gif|required',
            'caption1' => 'required',
            'caption2' => 'mimes:png,jpg,jpeg,gif|required',
        ];
    }
}
