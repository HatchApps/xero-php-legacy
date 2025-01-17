<?php

namespace XeroHatch\Models\Accounting\Report;

class ProfitLoss extends Report
{
    /**
     * Get the resource uri of the class (Contacts) etc.
     *
     * @return string
     */
    public static function getResourceURI()
    {
        return 'Reports/ProfitAndLoss';
    }
}
