<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PaginatedMerchantTransactionDto_data_type extends Enum {
    public const CHARGE = "charge";
    public const PAYOUT = "payout";
    public const REFUND = "refund";
    public const CHARGEBACK = "chargeback";
}
