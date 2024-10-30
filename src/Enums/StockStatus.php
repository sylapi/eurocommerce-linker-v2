<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

enum StockStatus: int
{   
    case COMMERCIAL = 0;
    case RETURN_STATUS = 1;
    case QUALITY_CONTROL = 2;
    case BLOCKADE_AFTER_QUALITY_CHECK = 3;
    case BLOCK = 4;
    case CUSTOMS = 5;
    case GOOD_RETURNED = 6;
    case SCRAPPING = 7;
    case PACKAGING = 8;
    case TO_BE_PROCESSED = 9;
    case CONSIGNMENT = 10;
    case SUPPLIES = 11;
    case UNRECOVERABLE = 12;
    case TO_BE_REPAIRED = 13;
}
