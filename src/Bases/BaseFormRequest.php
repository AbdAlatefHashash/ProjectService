<?php


namespace Hashash\ProjectService\Bases;


use Illuminate\Foundation\Http\FormRequest;
use Hashash\ProjectService\Traits\FormRequestTrait;

abstract class BaseFormRequest extends FormRequest
{
    use FormRequestTrait;

    public abstract function rules();

}
