<?php

namespace XeroHatch\Remote\Exception;

use XeroHatch\Remote\Response;
use XeroHatch\Remote\Exception;

class OrganisationOfflineException extends Exception
{
    protected $message = 'The organisation temporarily cannot be connected to.';

    protected $code = Response::STATUS_ORGANISATION_OFFLINE;
}
