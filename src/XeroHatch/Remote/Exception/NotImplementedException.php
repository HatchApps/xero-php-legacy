<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class NotImplementedException extends Exception
{
    protected $message = 'The method you have called has not been implemented.';

    protected $code = Response::STATUS_INTERNAL_ERROR;
}
