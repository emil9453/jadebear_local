<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRelationshipHistoriesRequest extends FormRequest
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
            
            'year' => 'max:2147483647|required|numeric',
            'caption1' => 'required',
            'text1' => 'required',
            'caption2' => 'required',
            'text2' => 'required',
        ];
    }
}
