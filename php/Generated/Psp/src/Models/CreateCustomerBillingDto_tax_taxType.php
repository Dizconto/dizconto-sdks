<?php

namespace Dizconto\Pay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CreateCustomerBillingDto_tax_taxType extends Enum {
    public const CNPJ = "cnpj";
    public const CPF = "cpf";
}
