<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChargeDto_status extends Enum {
    public const PENDING = "pending";
    public const AUTHORIZED = "authorized";
    public const CAPTURED = "captured";
    public const VOIDED = "voided";
    public const FAILED = "failed";
}
