<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class UpdateCustomerBillingDto_tax_taxType extends Enum {
    public const CNPJ = "cnpj";
    public const CPF = "cpf";
}
