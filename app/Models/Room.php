<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=['price','active','hotel_id','type_room_id'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=true;
    public function detail() 
    {
        return $this->hasOne(Booking_detail::class);
    }
}
