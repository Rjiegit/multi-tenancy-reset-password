<?php


namespace App\Packages\MultiTenancyPasswordReset;

use Illuminate\Contracts\Auth\CanResetPassword;

interface CanResetMultiTenancyPassword extends CanResetPassword
{
    public function getTenancyKey();
}
