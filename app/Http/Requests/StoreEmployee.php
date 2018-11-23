<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
		$rules = [
			'name' => 'required',
			'title' => 'required',
			'gender' => 'required',
			'phone' => 'required',
			'email' => 'required|unique:employees,email,' . $this->employees,
			'city' => 'required',
		];

		if (request()->isMethod('PATCH')) {
			$rules['email'] = 'required';
		}
		return $rules;
	}
}
