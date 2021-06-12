<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veneue extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [];
    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }

    public function event_types()
    {
        return $this->belongsToMany(EventType::class);
    }
}
