<?php

namespace DizcontoPay\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CustomerBillingDto_tax_taxType extends Enum {
    public const CNPJ = "cnpj";
    public const CPF = "cpf";
}
