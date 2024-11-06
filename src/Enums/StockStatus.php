<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

class StockStatus
{   
    const COMMERCIAL = 0;
    const RETURN_STATUS = 1;
    const QUALITY_CONTROL = 2;
    const BLOCKADE_AFTER_QUALITY_CHECK = 3;
    const BLOCK = 4;
    const CUSTOMS = 5;
    const GOOD_RETURNED = 6;
    const SCRAPPING = 7;
    const PACKAGING = 8;
    const TO_BE_PROCESSED = 9;
    const CONSIGNMENT = 10;
    const SUPPLIES = 11;
    const UNRECOVERABLE = 12;
    const TO_BE_REPAIRED = 13;
}
