<?php

namespace App\Helpers;

class AccountHelper
{
    public static function formatAccountNumber($accountNumber)
    {
        $accountNumber = preg_replace('/\D/', '', $accountNumber);

        return 'XXX-XXX-' . substr($accountNumber, -4);
    }
}
