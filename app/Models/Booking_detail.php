<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_detail extends Model
{
    use HasFactory;
    protected $table = 'booking_details';
    protected $fillable=['room_id','booking_id'];
    protected $hidden=['created_at','updated_at'];
    public $timestamps=true;
    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function booking() 
    {
        return $this->belongsTo(Booking::class);
    }
}
