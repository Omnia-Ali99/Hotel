<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_room extends Model
{
    use HasFactory;
    protected $table = 'type_rooms';
    protected $fillable=['url','name','active'];
    public $timestamps=true;
    public function hotels()
    {
        return $this->belongsToMany(Hotel::class,'rooms');

    }
    
    
    
}
