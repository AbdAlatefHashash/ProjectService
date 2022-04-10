<?php


namespace Hashash\ProjectService\Exceptions;

use Exception;
use Hashash\ProjectService\Helpers\ResponseHelper;

class OperationFailException extends Exception
{
    public function report()
    {
        return false;
    }


    public function render($request)
    {
        if($request->expectsJson())
        return ResponseHelper::operationFail($this->message);

        abort(500);
    }
}
