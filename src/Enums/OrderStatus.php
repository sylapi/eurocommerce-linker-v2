<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

enum OrderStatus: int
{
    case DRAFT = 0;
    case DRAFTNP = 1;
    case WORKING = 2;
    case TRANSFERRED = 3;
    case COMPLETION = 4;
    case PACKED = 5;
    case RELEASED = 6;
    case SENT = 7;
    case DELIVERED = 8;
    case CANCELED = 9;
    case ERROR = 10;
    case SETTLED = 11;
    case RETURN = 12;
    case IMPORT_START_STATUS = 13;
}
