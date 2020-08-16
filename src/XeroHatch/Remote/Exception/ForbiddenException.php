<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class ForbiddenException extends Exception
{
    protected $message = 'You are not permitted to access this resource';

    protected $code = Response::STATUS_FORBIDDEN;
}
