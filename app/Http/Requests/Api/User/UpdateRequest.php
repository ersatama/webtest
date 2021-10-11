<?php

namespace App\Http\Requests\Api\User;

use App\Domain\Contracts\MainContract;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            MainContract::NAME  =>  'nullable|min:2',
            MainContract::PASSWORD  =>  'nullable|min:6'
        ];
    }

    /**
     * @throws ValidationException
     */
    public function validated(): array
    {
        $request    =   $this->validator->validated();
        if (array_key_exists(MainContract::PASSWORD,$request)) {
            $request[MainContract::PASSWORD]    =   Hash::make($request[MainContract::PASSWORD]);
        }
        return $request;
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
