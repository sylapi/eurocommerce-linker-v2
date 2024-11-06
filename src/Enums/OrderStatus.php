<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

class OrderStatus
{
    const DRAFT = 0;
    const DRAFTNP = 1;
    const WORKING = 2;
    const TRANSFERRED = 3;
    const COMPLETION = 4;
    const PACKED = 5;
    const RELEASED = 6;
    const SENT = 7;
    const DELIVERED = 8;
    const CANCELED = 9;
    const ERROR = 10;
    const SETTLED = 11;
    const RETURN_STATUS = 12;
    const IMPORT_START_STATUS = 13;
}
