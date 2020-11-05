<?php

namespace App;

use App\Models\Tickets\Ticket;
use App\Models\Tickets\Transaction;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    public function userTickets()
    {
        return $this->hasMany(Ticket::class, 'buyer_user_id');
    }

    public function userTransactions()
    {
        return $this->hasMany(Transaction::class, 'buyer_user_id');
    }

    public function transaction()
    {
        return $this->morphMany(Ticket::class, 'transaction');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
}
