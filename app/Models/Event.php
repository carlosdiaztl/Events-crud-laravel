<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'quantity',
        'date_event'
    ];
    protected $casts = [
        'create_at' => 'datetime',
        'update_at' => 'datetime',
    ];
    public function reservas()
    {
        return $this->hasMany(Reserva::class);
    }
}
