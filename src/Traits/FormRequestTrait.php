<?php


namespace Hashash\ProjectService\Traits;


use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Hashash\ProjectService\Helpers\ValidateHelper;

trait FormRequestTrait
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

    protected function failedValidation(Validator $validator)
    {
        if($this->expectsJson())
        {
            $validateHelper = new ValidateHelper($validator->errors());
            throw new HttpResponseException($validateHelper->checkErrors());
        }
        parent::failedValidation($validator);
    }


    public function validationData()
    {
        return array_merge($this->all(), $this->route()->parameters());
    }

}
