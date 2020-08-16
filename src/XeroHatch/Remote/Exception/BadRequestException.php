<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class BadRequestException extends Exception
{
    protected $message = 'Bad Request';

    protected $code = Response::STATUS_BAD_REQUEST;
}
