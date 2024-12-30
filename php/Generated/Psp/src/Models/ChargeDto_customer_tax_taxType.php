<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ChargeDto_customer_tax_taxType extends Enum {
    public const CNPJ = "cnpj";
    public const CPF = "cpf";
}
