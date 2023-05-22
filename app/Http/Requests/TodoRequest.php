<?php

namespace App\Http\Requests;

use App\Traits\ApiResponse;
use Symfony\Component\HttpFoundation\Request;

class TodoRequest extends ApiRequest
{
    use ApiResponse;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->method() == Request::METHOD_POST)
            return true;
        $todo = $this->route('todo');
        return auth()->user()->id = $todo->user_id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'todo' => 'required|string|max:255',
        'label' => 'nullable|string',
        'done' => 'Nullable|boolean',
        ];
    }
}
