<?php namespace LosCedros\Http\Requests;

use LosCedros\Http\Requests\Request;
use LosCedros\Models\Conceptos;

class CreateConceptosRequest extends Request {

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
		return Conceptos::$rules;
	}

}
