<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const AVATAR_PATH = "images/avatars/";
    const DEFAULT_AVATAR = "/images/avatars/user.png";

    const ACTIVE = "ACTIVE";
    const UNACTIVATED = "UNACTIVATED";
    const BLOCKED = "BLOCKED";
    const SUSPENDED = "SUSPENDED";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $accountTypes = null;

    public function threads()
    {
        return $this->hasMany('App\Models\ForumThread');
    }

    public function data()
    {
        return $this->hasOne('App\Models\UserData');
    }

    public function getAccountTypes()
    {
        return $this->hasMany('App\Models\UserAccountType');
    }

    public function getUserAccountTypeInfo($accountTypeId)
    {
        if($this->accountTypes == null)
        {
            $this->accountTypes = $this->getAccountTypes;
        }


        foreach ($this->accountTypes as $accountType)
        {
            if($accountType->account_type_id == $accountTypeId)
            return $accountType;
        }

        return false;
    }

    public function is($accountTypeId)
    {

        if($this->accountTypes == null)
        {
            $this->accountTypes = $this->getAccountTypes;
        }


        $result = $this->accountTypes->pluck('account_type_id')->toArray();

        if(in_array($accountTypeId, $result))
        {
            return true;
        }

        return false;
    }

    //provided a user is of a particular account
    public function agent_info()
    {
        return $this->hasOne('App\Models\AgentInfo');
    }

    public function mandate_info()
    {
        return $this->hasOne('App\Models\MandateInfo');
    }

}
