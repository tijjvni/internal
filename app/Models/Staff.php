<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'priority',
        'role_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'role_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function payments()
    {
        return $this->morphMany(Payment::class, 'paymentable');
    }

    public function role()
    {
        return $this->belongsTo(StaffRole::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
