<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class NotAvailableException extends Exception
{
    protected $message = 'API is currently unavailable.';

    protected $code = Response::STATUS_NOT_AVAILABLE;
}
