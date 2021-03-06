<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user()->can('update', $this->route('course'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $request = app('\App\Http\Requests\\'.studly_case($this->type).'LessonRequest');

        return array_merge([
            'name' => 'required|string',
            'description' => 'required|string',
        ], $request->rules());
    }
}
