<?php

namespace App\Http\Requests\Api\User;

use App\Domain\Contracts\MainContract;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Validation\Validator;

class CreateRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            MainContract::NAME  =>  'required|min:2',
            MainContract::EMAIL =>  'required|unique:users',
            MainContract::PASSWORD  =>  'required|min:6'
        ];
    }

    /**
     * @throws ValidationException
     */
    public function validated(): array
    {
        return $this->validator->validated();
    }

    protected function failedValidation(Validator $validator)
    {
        $response = [
            'status' => 'failure',
            'status_code' => 400,
            'message' => 'Bad Request',
            'errors' => $validator->errors(),
        ];
        throw new HttpResponseException(response()->json($response, 400));
    }
}
