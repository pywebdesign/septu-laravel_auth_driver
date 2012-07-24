<?php

namespace Septu\Models;

class Login extends \Eloquent
{
    /**
     * @var  string  sets the table name
     */
    public static $table = 'auth_logins'; 

    /**
     * Profile Relationship
     * @return SeptuProfile
     */
    public function user()
    {
        return $this->belongs_to('SeptuUser');
    }
}