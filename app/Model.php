<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    // protected $fillable = ['title', 'body']; fillable==>annoying beacuse it will say everything not allowed except these two fields
    //$guarded the opposite everything allowed except this field
    protected $guarded = [];
}
