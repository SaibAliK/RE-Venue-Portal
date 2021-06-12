<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    //protected $fillable = ['name','slug'];
    protected $guarded = [];
    public function veneus()
    {
        return $this->hasMany(Veneue::class, 'location_id', 'id');
    }

    // define scope for filter data
    public function ScopeCountry($q)
    {
        return $q->where('name', 'Pakistan');
    }

    //accessor and mutator
    public function getLocationNameAttribute()
    {
        return ucfirst($this->name);
        //return $this->name . "$" . $this->name;
    }

    public function setLocationNameAttribute($key, $value)
    {
        $this->attributes[$key] = strtolower($value);
    }

    public function path()
    {
       return Str::slug($this->name, '-');
    }

}
