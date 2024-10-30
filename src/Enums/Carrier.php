<?php
declare(strict_types=1);

namespace Sylapi\EurocommerceLinkerV2\Enums;

enum Carrier: string
{
    case GLSDE = 'GLSDE';
    case GLSPL = 'GLSPL';
    case DHLPaket = 'DHLPaket';
    case DPDPL = 'DPDPL';
    case DPDDE = 'DPDDE';
    case INPOS = 'INPOS';
    case POCZT = 'POCZT';
    case OLZA = 'OLZA';
    case PCKTA = 'PCKTA';
    case ASENDIA = 'ASENDIA';
    case CSTMTRNSPT = 'CSTMTRNSPT';
}
