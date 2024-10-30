<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

enum Source: int
{
    case NONE = 0;
    case UI = 1;
    case FILE = 2;
    case API = 3;
    case BASELINKER = 4;
    case SHOPIFY = 5;
    case ALLEGRO = 6;
    case PLENTYMARKETS = 7;
    case WOOCOMMERCE = 8;
    case OGIEN = 9;
    case ROSESTA = 10;
    case PRESTASHOP = 11;
    case IDOSELL = 12;
}
