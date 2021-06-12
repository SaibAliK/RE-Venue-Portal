<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function veneues()
    {
        return $this->belongsToMany(Veneue::class);
    }
}
