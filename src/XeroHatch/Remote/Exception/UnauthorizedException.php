<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class UnauthorizedException extends Exception
{
    protected $message = 'Invalid authorization credentials.';

    protected $code = Response::STATUS_UNAUTHORISED;
}
