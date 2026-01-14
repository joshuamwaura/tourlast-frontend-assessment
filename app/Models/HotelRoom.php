<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HotelRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'hotel_rooms';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;

    public function hotel()
    {
        return $this->hasOne(Hotel::class, 'id', 'hotel_id');
    }

    public function images()
    {
        return $this->hasMany(HotelImage::class, 'hotel_room_id', 'id')->where('type', 'room');
    }

    public function imagesRoom()
    {
        return $this->hasMany(HotelRoomImage::class, 'hotel_room_id', 'id')->where('type', 'hotel');
    }

    public function getThumbnailAttribute($value)
    {
        return asset('frontend/thumbnail') . '/' . $value;
    }

    public function amenity()
    {
        return $this->hasMany(PtAmenity::class, 'pt_id', 'id')->where('type', 'hotel');
    }
}
