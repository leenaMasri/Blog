<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /*
    public static function inComplete()
    {
        return static::where('completed',0)->get();
    }
    */
    /*
    public function scopeIncomplete($query)// because of scope laravel knows to treat it as a query scope
    {
        return $query->where('completed',0);


    }
    */

    // we use query scopes if we need to combine to query statmentss
}
