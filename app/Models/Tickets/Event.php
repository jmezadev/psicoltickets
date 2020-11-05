<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function eventLocations()
    {
        return $this->hasMany(EventLocation::class);
    }
}
