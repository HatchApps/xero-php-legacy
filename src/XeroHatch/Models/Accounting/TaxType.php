<?php

namespace XeroHatch\Models\Accounting;

class TaxType
{
    const AUSTRALIAN_TAX_TYPE = 'TAX TYPE';

    const AUSTRALIAN_OUTPUT = 'OUTPUT';

    const AUSTRALIAN_INPUT = 'INPUT';

    const AUSTRALIAN_CAPEXINPUT = 'CAPEXINPUT';

    const AUSTRALIAN_EXEMPTEXPORT = 'EXEMPTEXPORT';

    const AUSTRALIAN_EXEMPTEXPENSES = 'EXEMPTEXPENSES';

    const AUSTRALIAN_EXEMPTCAPITAL = 'EXEMPTCAPITAL';

    const AUSTRALIAN_EXEMPTOUTPUT = 'EXEMPTOUTPUT';

    const AUSTRALIAN_INPUTTAXED = 'INPUTTAXED';

    const AUSTRALIAN_BASEXCLUDED = 'BASEXCLUDED';

    const AUSTRALIAN_GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';

    const AUSTRALIAN_GSTONIMPORTS = 'GSTONIMPORTS';

    const GLOBAL_TAX_TYPE = 'TAX TYPE';

    const GLOBAL_INPUT = 'INPUT';

    const GLOBAL_NONE = 'NONE';

    const GLOBAL_OUTPUT = 'OUTPUT';

    const GLOBAL_GSTONIMPORTS = 'GSTONIMPORTS';

    const NEW_ZEALAND_TAX_TYPE = 'TAX TYPE';

    const NEW_ZEALAND_INPUT2 = 'INPUT2';

    const NEW_ZEALAND_NONE = 'NONE';

    const NEW_ZEALAND_ZERORATED = 'ZERORATED';

    const NEW_ZEALAND_OUTPUT2 = 'OUTPUT2';

    const NEW_ZEALAND_GSTONIMPORTS = 'GSTONIMPORTS';

    const UNITED_KINGDOM_TAX_TYPE = 'TAX TYPE';

    const UNITED_KINGDOM_CAPEXINPUT = 'CAPEXINPUT';

    const UNITED_KINGDOM_CAPEXINPUT2 = 'CAPEXINPUT2';

    const UNITED_KINGDOM_CAPEXOUTPUT = 'CAPEXOUTPUT';

    const UNITED_KINGDOM_CAPEXOUTPUT2 = 'CAPEXOUTPUT2';

    const UNITED_KINGDOM_CAPEXSRINPUT = 'CAPEXSRINPUT';

    const UNITED_KINGDOM_CAPEXSROUTPUT = 'CAPEXSROUTPUT';

    const UNITED_KINGDOM_ECACQUISITIONS = 'ECACQUISITIONS';

    const UNITED_KINGDOM_ECZRINPUT = 'ECZRINPUT';

    const UNITED_KINGDOM_ECZROUTPUT = 'ECZROUTPUT';

    const UNITED_KINGDOM_ECZROUTPUTSERVICES = 'ECZROUTPUTSERVICES';

    const UNITED_KINGDOM_EXEMPTINPUT = 'EXEMPTINPUT';

    const UNITED_KINGDOM_EXEMPTOUTPUT = 'EXEMPTOUTPUT';

    const UNITED_KINGDOM_GSTONIMPORTS = 'GSTONIMPORTS';

    const UNITED_KINGDOM_INPUT2 = 'INPUT2';

    const UNITED_KINGDOM_NONE = 'NONE';

    const UNITED_KINGDOM_OUTPUT2 = 'OUTPUT2';

    const UNITED_KINGDOM_REVERSECHARGES = 'REVERSECHARGES';

    const UNITED_KINGDOM_RRINPUT = 'RRINPUT';

    const UNITED_KINGDOM_RROUTPUT = 'RROUTPUT';

    const UNITED_KINGDOM_SRINPUT = 'SRINPUT';

    const UNITED_KINGDOM_SROUTPUT = 'SROUTPUT';

    const UNITED_KINGDOM_ZERORATEDINPUT = 'ZERORATEDINPUT';

    const UNITED_KINGDOM_ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';

    const UNITED_STATE_TAX_TYPE = 'TAX TYPE';

    const UNITED_STATE_INPUT = 'INPUT';

    const UNITED_STATE_NONE = 'NONE';

    const UNITED_STATE_OUTPUT = 'OUTPUT';

    const UNITED_STATE_GSTONIMPORTS = 'GSTONIMPORTS';

    const SINGAPORE_TAX_TYPE = 'TAX TYPE';

    const SINGAPORE_BLINPUT = 'BLINPUT';

    const SINGAPORE_DSOUTPUT = 'DSOUTPUT';

    const SINGAPORE_ES33OUTPUT = 'ES33OUTPUT';

    const SINGAPORE_ESN33OUTPUT = 'ESN33OUTPUT';

    const SINGAPORE_GSTONIMPORTS = 'GSTONIMPORTS';

    const SINGAPORE_IGDSINPUT = 'IGDSINPUT';

    const SINGAPORE_IMINPUT = 'IMINPUT';

    const SINGAPORE_INPUT = 'INPUT';

    const SINGAPORE_MEINPUT = 'MEINPUT';

    const SINGAPORE_NONE = 'NONE';

    const SINGAPORE_NRINPUT = 'NRINPUT';

    const SINGAPORE_OPINPUT = 'OPINPUT';

    const SINGAPORE_OUTPUT = 'OUTPUT';

    const SINGAPORE_OSOUTPUT = 'OSOUTPUT';

    const SINGAPORE_SROUTPUT = 'SROUTPUT';

    const SINGAPORE_TXESSINPUT = 'TXESSINPUT';

    const SINGAPORE_TXINPUT = 'TXINPUT';

    const SINGAPORE_TXN33INPUT = 'TXN33INPUT';

    const SINGAPORE_TXPETINPUT = 'TXPETINPUT';

    const SINGAPORE_TXREINPUT = 'TXREINPUT';

    const SINGAPORE_ZERORATEDINPUT = 'ZERORATEDINPUT';

    const SINGAPORE_ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';

    const SOUTH_AFRICA_TAX_TYPE = 'TAX TYPE';

    const SOUTH_AFRICA_CAPEXINPUT = 'CAPEXINPUT';

    const SOUTH_AFRICA_EXEMPTOUTPUT = 'EXEMPTOUTPUT';

    const SOUTH_AFRICA_GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';

    const SOUTH_AFRICA_IMINPUT = 'IMINPUT';

    const SOUTH_AFRICA_INPUT = 'INPUT';

    const SOUTH_AFRICA_INPUT2 = 'INPUT2';

    const SOUTH_AFRICA_NONE = 'NONE';

    const SOUTH_AFRICA_OUTPUT = 'OUTPUT';

    const SOUTH_AFRICA_OUTPUT2 = 'OUTPUT2';

    const SOUTH_AFRICA_SROUTPUT = 'SROUTPUT';

    const SOUTH_AFRICA_ZERORATED = 'ZERORATED';

    const SOUTH_AFRICA_ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';

    /**
     * These have incorrect spelling and will be remove in a future release.
     * Please see "AUSTRALIAN" constants at the top of this file.
     *
     * @deprecated
     */
    const AUSTRALIUM_TAX_TYPE = self::AUSTRALIAN_TAX_TYPE;

    const AUSTRALIUM_OUTPUT = self::AUSTRALIAN_OUTPUT;

    const AUSTRALIUM_INPUT = self::AUSTRALIAN_INPUT;

    const AUSTRALIUM_CAPEXINPUT = self::AUSTRALIAN_CAPEXINPUT;

    const AUSTRALIUM_EXEMPTEXPORT = self::AUSTRALIAN_EXEMPTEXPORT;

    const AUSTRALIUM_EXEMPTEXPENSES = self::AUSTRALIAN_EXEMPTEXPENSES;

    const AUSTRALIUM_EXEMPTCAPITAL = self::AUSTRALIAN_EXEMPTCAPITAL;

    const AUSTRALIUM_EXEMPTOUTPUT = self::AUSTRALIAN_EXEMPTOUTPUT;

    const AUSTRALIUM_INPUTTAXED = self::AUSTRALIAN_INPUTTAXED;

    const AUSTRALIUM_BASEXCLUDED = self::AUSTRALIAN_BASEXCLUDED;

    const AUSTRALIUM_GSTONCAPIMPORTS = self::AUSTRALIAN_GSTONCAPIMPORTS;

    const AUSTRALIUM_GSTONIMPORTS = self::AUSTRALIAN_GSTONIMPORTS;
}
