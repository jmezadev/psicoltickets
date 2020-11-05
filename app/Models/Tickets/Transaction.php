<?php

namespace App\Models\Tickets;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $guarded = [];

    public function transactionTickets()
    {
        return $this->hasMany(Ticket::class, 'transaction_id');
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
