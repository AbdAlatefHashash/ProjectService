<?php


namespace Hashash\ProjectService\Exceptions;

use Exception;
use Hashash\ProjectService\Helpers\ResponseHelper;

class InsertingDataFailException extends Exception
{
    public function report()
    {
        return false;
    }


    public function render($request)
    {
        if($request->expectsJson())
        return ResponseHelper::insertingFail($this->message);

        abort(500);
    }
}
