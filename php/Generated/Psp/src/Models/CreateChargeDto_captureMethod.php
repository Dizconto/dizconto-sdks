<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CreateChargeDto_captureMethod extends Enum {
    public const AUTO = "auto";
    public const MANUAL = "manual";
}
