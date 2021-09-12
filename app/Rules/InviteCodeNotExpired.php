<?php

namespace App\Rules;

use App\Models\InviteCode;
use Illuminate\Contracts\Validation\Rule;

class InviteCodeNotExpired implements Rule
{
    protected ?InviteCode $inviteCode;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(?InviteCode $inviteCode)
    {
        $this->inviteCode = $inviteCode;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !$this->inviteCode->hasExpired();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'That invite code has expired.';
    }
}
