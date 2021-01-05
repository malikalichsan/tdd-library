<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded = [];

    protected $dates = [
        'dob',
    ];

    // mutator
    public function setDobAttribute($attributes)
    {
        $this->attributes['dob'] = Carbon::parse($attributes);
    }

    public function path()
    {
        return '/authors/' . $this->id;
    }
}
