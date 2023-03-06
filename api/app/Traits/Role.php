<?php

namespace App\Traits;

use App\Models\Role as ModelRole;
use Illuminate\Database\Eloquent\Builder;

trait Role {

    

    public function relationRole()
    {
        return $this->hasOne(ModelRole::class);
    }



    public function role(string $name)
    {
        return self::relationRole()->where('role','=', $name)->first() ? self::first() : null ;  
    }



    public function hasRole(string $name)
    {
        return !empty($this->role($name))  ;
    }




    public static function roles(string $name)
    {
        return self::whereHas('relationRole',function($q) use($name) {
            return $q->where('role',$name);
         });
    }



    public function superAdmin()
    {
        
    }

}
