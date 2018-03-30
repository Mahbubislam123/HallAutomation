<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','department','designation','role_id','registration_number','roll_number','phone_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }

    


    public function Roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasRole($role)
    {
        if(is_string($role))
        {
            return $this->roles->contains('name', $role);
        }


        return !! $role->intersect($this->roles)->count();

        //foreach ($role as $r){
        //if($this->hasRole($r->name))
        //       {
        //           return true;
        //       }
        //    }
        //return false;
    }



    public function assign($role)
    {
         if(is_string($role))
        {
             return $this->roles()->save(

                Role::whereName($role)->firstOrFail()
                );
        }

        return $this->roles()->save($role);

    }
    

}
