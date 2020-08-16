<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class InternalErrorException extends Exception
{
    protected $message = 'An unhandled error with the Xero API. Contact the Xero API team if problems persist.';

    protected $code = Response::STATUS_INTERNAL_ERROR;
}
