<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class PaginatedMerchantDto_data_status extends Enum {
    public const ACTIVE = "active";
    public const SUSPENDED = "suspended";
    public const DELETED = "deleted";
}
