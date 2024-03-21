<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {
    return [
      'title' => ['required', 'string', 'max:255',  Rule::unique('posts')->ignore($this->post)],
      'title_bn' => 'nullable|string|max:255',
      'description' => 'required|string',
      'description_bn' => 'nullable|string',
    ];
  }
}
