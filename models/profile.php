<?php

namespace Septu\Models;

class Profile extends \Eloquent
{
    /**
     * @var  string  sets the table name
     */
    public static $table = 'auth_profiles'; 

    /**
     * Profile Relationship
     * @return SeptuProfile
     */
    public function user()
    {
        return $this->belongs_to('SeptuUser');
    }
}