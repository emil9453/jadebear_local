<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamMembersRequest extends FormRequest
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
            'position' => 'min:2|max:250|required',
            'name' => 'min:2|max:100|required',
            'surname' => 'min:2|max:100|required',
            'photo' => 'mimes:png,jpg,jpeg,gif|required',
        ];
    }
}
