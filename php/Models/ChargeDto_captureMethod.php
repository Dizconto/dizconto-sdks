<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChargeDto_captureMethod extends Enum {
    public const AUTO = "auto";
    public const MANUAL = "manual";
}