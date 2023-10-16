<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function types()
    {
        return $this->belongsToMany(Type_room::class,'Rooms')->withPivot('price','active')->wherePivot('active', '0');
    }
    public function city() 
    {
        return $this->belongsTo(City::class);
    }

    public function admin() 
    {
        return $this->belongsTo(Admin::class);
    }
    
}
