<?php


namespace Hashash\ProjectService\Bases;


use Illuminate\Database\Eloquent\Model;
use Hashash\ProjectService\Traits\ModelTrait;

abstract class BaseModel extends Model
{
    use ModelTrait;
}
