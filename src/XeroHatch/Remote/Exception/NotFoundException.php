<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class NotFoundException extends Exception
{
    protected $message = 'Resource Not Found';

    protected $code = Response::STATUS_NOT_FOUND;
}
