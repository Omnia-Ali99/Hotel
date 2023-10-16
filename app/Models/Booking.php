<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable=['del','arrival_date','departure_date','bill_id','user_id'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=true;
    use HasFactory;
    public function bill() 
    {
        return $this->belongsTo(Bill::class);
    }
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    public function details()
    {
        return $this->hasMany(Booking_detail::class);
    }
}
