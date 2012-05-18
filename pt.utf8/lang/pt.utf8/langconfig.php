<?php

defined('INTERNAL') || die();

$string['locales'] = 'pt.utf8,pt_PT.utf8,pt,portuguese_portugal,portuguese';
$string['strfdateofbirth'] = '%%d/%%m/%%Y';
$string['strfdaymonthyearshort'] = '%%d/%%m/%%Y';
$string['strftimedate'] = '%%e %%B %%Y';
$string['strftimedateshort'] = '%%d %%B';
$string['strftimedatetime'] = '%%d %%B %%Y, %%H:%%M %%p';
$string['strftimedatetimeshort'] = '%%d/%%m/%%Y %%H:%%M';
$string['strftimedaydate'] = '%%A, %%d %%B %%Y';
$string['strftimedaydatetime'] = '%%A, %%d %%B %%Y, %%H:%%M %%p';
$string['strftimedayshort'] = '%%A, %%d %%B';
$string['strftimedaytime'] = '%%a, %%k:%%M';
$string['strftimemonthyear'] = '%%B %%Y';
$string['strftimerecent'] = '%%d %%b, %%k:%%M';
$string['strftimerecentfull'] = '%%a, %%d %%b %%Y, %%H:%%M %%p';
$string['strftimerecentyear'] = '%%d %%b %%Y, %%k:%%M';
$string['strftimetime'] = '%%H:%%M %%p';
$string['strftimew3cdate'] = '%%Y-%%m-%%d';
$string['strftimew3cdatetime'] = '%%Y-%%m-%%dT%%T%%z';
$string['thislanguage'] = 'Português (Portugal)';

// Plural forms, added by language pack generator
$string['pluralrule'] = 'n != 1';
$string['pluralfunction'] = 'plural_pt_utf8';
function plural_pt_utf8($n) {
    return $n != 1;
}
